<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

// app docs
$router->get('/', 'AppController@index');
// app install
$router->get('/install', 'AppController@install');
// app search queries - only users return for now
$router->get('/search', 'AppController@search');

// users crud routes
$router->get('/users', 'UserController@index');
// Add a user
$router->post('/users', 'UserController@create');

$router->get('/users/{id}', 'UserController@show');
$router->put('/users/{id}', 'UserController@update');
$router->delete('/users/{id}', 'UserController@destroy');