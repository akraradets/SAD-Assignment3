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

$router->get('/', 'CalController@cal');
$router->post('/', 'CalController@cal');
$router->get('/getPlace', 'CalController@getPlace');
$router->post('/test', 'CalController@test');
$router->get('/test', 'CalController@test');