<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;

use App\Http\Sockets\ChatServer;

class WebSocket extends Command
{
    protected $signature = 'websocket:start';
    protected $description = 'Start WebRTC on port 8080';
    private $server;

    public function __construct()
    {
        parent::__construct();

        $this->server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new ChatServer()
                )
            ),
            8080
        );
    }

    public function handle()
    {
        $this->server->run();

        return 0;
    }
}
