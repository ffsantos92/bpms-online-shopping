<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('productS', 'App\Http\Controllers\ProductController@index');
$app->get('productS/create', 'App\Http\Controllers\ProductController@create');
$app->post('productS', 'App\Http\Controllers\ProductController@store');
$app->get('productS/{id}', 'App\Http\Controllers\ProductController@show');
$app->get('productS/{id}/edit', 'App\Http\Controllers\ProductController@edit');
$app->put('productS/{id}', 'App\Http\Controllers\ProductController@update');
$app->patch('productS/{id}', 'App\Http\Controllers\ProductController@update');
$app->delete('productS/{id}', 'App\Http\Controllers\ProductController@destroy');
