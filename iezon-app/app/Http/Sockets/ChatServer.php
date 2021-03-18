<?php

namespace App\Http\Sockets;

use App;
use Auth;
use Config;
use App\User;
use GuzzleHttp\Psr7\Header;
use Illuminate\Session\SessionManager;

use Illuminate\Support\Facades\Crypt;
use Ratchet\ConnectionInterface;
use Ratchet\RFC6455\Messaging\MessageInterface;
use Ratchet\WebSocket\MessageComponentInterface;

class ChatServer implements MessageComponentInterface
{
    private $clients;

    public function __construct()
    {
        $this->clients = new \SplObjectStorage;

        echo "Started WebRTC Chat Server on port 8080...\n";
        echo "Listening for new connections...\n\n";
    }

    public function onOpen(ConnectionInterface $conn) {
        // Attach connection
        $this->clients->attach($conn);

        // Create a new session handler for this client
        $session = (new SessionManager(App::getInstance()))->driver();

        // Get the cookies
        $cookiesRaw = $conn->httpRequest->getHeader('Cookie');
        $cookies = [];

        if(count($cookiesRaw)) {
            $cookies = Header::parse($cookiesRaw)[0];
            //var_dump(Header::parse($cookiesRaw));
        }

        // Get the laravel's one
        $sessionId = Crypt::decrypt(urldecode($cookies[Config::get('session.cookie')]), false);

        // Set the session id to the session handler
        $session->setId($sessionId);

        // Bind the session handler to the client connection
        $conn->session = $session;
    }

    public function onMessage(ConnectionInterface $conn, MessageInterface $msg)
    {
        $conn->session->start();

        var_dump($conn->session->get(Auth::getName()));

        if(!is_null(($decoded = json_decode(base64_decode($msg), true))) && array_diff(['message'], array_keys($decoded)))
            return;

        var_dump($decoded['message']);

        return;

        echo "[{$user->name}] {$decoded['message']}\n";

        foreach ($this->clients as $client) {

            //if ($conn->resourceId === $client->resourceId)
                //continue;

            $client->send(base64_encode(json_encode([
                'from' => $user->name,
                'msg'  => $decoded['message'],
            ])));
        }
    }

    function onClose(ConnectionInterface $conn)
    {
        $this->clients->detach($conn);

        echo "[DISCONNECTED] {$conn->resourceId}...\n";
    }

    function onError(ConnectionInterface $conn, \Exception $e)
    {
        $this->clients->detach($conn);

        echo "[{$conn->resourceId}] {$e->getMessage()}\n";
        echo "[DISCONNECTED] {$conn->resourceId}...\n";
    }
}
