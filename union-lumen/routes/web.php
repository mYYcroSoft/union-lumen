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

$router->get('/', function () use ($router) {
    return view('index');
});

$router->get('/addcar', function () use ($router) {
    return view('addcar');
});

$router->post('/addcar', 'CarController@addCar');

$router->get('/cars', 'CarController@index');

$router->get('/cars/{id}/delete', 'CarController@deleteCar');

$router->get('/cars/{id}/edit', 'CarController@editCar');

$router->post('/cars/{id}/update', 'CarController@updateCar');

$router->get('/cloud', 'CloudController@index');

$router->get('/download/{filename:.+}', 'CloudController@download');

$router->post('/uploadfile', 'CloudController@uploadFile');
