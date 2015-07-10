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

$app->get('/', function () use ($app) {
    return $app->welcome();
});

$app->get('products', 'App\Http\Controllers\ProductController@index');
$app->get('products/create', 'App\Http\Controllers\ProductController@create');
$app->post('products', 'App\Http\Controllers\ProductController@store');
$app->get('products/{id}', 'App\Http\Controllers\ProductController@show');
$app->get('products/{id}/edit', 'App\Http\Controllers\ProductController@edit');
$app->put('products/{id}', 'App\Http\Controllers\ProductController@update');
$app->patch('products/{id}', 'App\Http\Controllers\ProductController@update');
$app->delete('products/{id}', 'App\Http\Controllers\ProductController@destroy');
