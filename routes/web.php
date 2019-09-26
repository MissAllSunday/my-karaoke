<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', 'InicioController');

$router->get('/leaderboard', 'LeaderboardController@show');

$router->get('/host', 'HostController@showLobby');

$router->get('/host/game', 'HostController@showGame');

$router->get('user/{id}', 'UserController@show');

$router->get('user/{id}', 'UserController@show');

$router->get('vote', 'RateController@vote');
