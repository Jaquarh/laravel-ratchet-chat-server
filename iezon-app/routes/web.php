<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard', [
        'participants' => [
            'Daniel Pickering',
            'Beta',
            'Shane Jones'
        ],
        'chats' => [
            (object) ['author' => 'Daniel Pickering', 'stamp' => '22:52', 'text' => 'So what is a subnet again?'],
            (object) ['author' => 'Daniel Pickering', 'stamp' => '22:52', 'text' => 'I spilt tea down my only trousers so I forgot :('],
            (object) ['author' => 'Shane Jones', 'stamp' => '22:52', 'text' => 'I don\'t know.. but my lecturer says its not needed'],
            (object) ['author' => 'Daniel Pickering', 'stamp' => '22:54', 'text' => 'I\'ll email him for help'],
            (object) ['author' => 'Beta', 'stamp' => '22:55', 'text' => '<a class=\'text-blue-500\' href=\'#\'>@Shane Jones</a>'],
            (object) ['author' => 'Beta', 'stamp' => '22:55', 'text' => '<a class=\'text-blue-500\' href=\'#\'>@Daniel Pickering</a>'],
            (object) ['author' => 'Beta', 'stamp' => '22:56', 'text' => 'Die'],
            (object) ['author' => 'Shane Jones', 'stamp' => '23:01', 'text' => 'Did you just assume my gender?'],
            (object) ['author' => 'Daniel Pickering', 'stamp' => '23:01', 'text' => '<a class=\'text-blue-500\' href=\'#\'>@Beta</a> What a cunt'],
        ],
    ]);
})->name('dashboard');
