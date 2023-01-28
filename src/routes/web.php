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
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function() use ($router){
    // $router->get('/user', ['uses' => 'UserController@index']);
    // $router->post('/user', ['uses' => 'UserController@create']);
    // $router->get('/user/{id}', ['uses' => 'UserController@show']);
    // $router->put('/user/{id}', ['uses' => 'UserController@update']);
    // $router->delete('/user/{id}', ['uses' => 'UserController@destroy']);

    $router->get('/barang', ['uses' => 'BarangController@index']);
    $router->post('/barang', ['uses' => 'BarangController@create']);
    $router->get('/barang/{id}', ['uses' => 'BarangController@show']);
    $router->put('/barang/{id}', ['uses' => 'BarangController@update']);
    $router->delete('/barang/{id}', ['uses' => 'BarangController@destroy']);
    
    $router->get('/supplier', ['uses' => 'SupplierController@index']);
    $router->post('/supplier', ['uses' => 'SupplierController@create']);
    $router->get('/supplier/{id}', ['uses' => 'SupplierController@show']);
    $router->put('/supplier/{id}', ['uses' => 'SupplierController@update']);
    $router->delete('/supplier/{id}', ['uses' => 'SupplierController@destroy']);
    
});