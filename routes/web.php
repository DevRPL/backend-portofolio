<?php

use Illuminate\Support\Str;

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

$router->get('/skills', 'TodoController@getSkill');
$router->get('/post', 'TodoController@index');
$router->get('/post/{id}', 'TodoController@show');
$router->post('/post/store', 'TodoController@store');
$router->get('/feedback', 'TodoController@getFeedback');
$router->get('/content', 'TodoController@getContent');
$router->post('/postFeedback', 'TodoController@postFeedback');
$router->put('/post/update/{id}', 'TodoController@update');
$router->delete('/post/delete/{id}', 'TodoController@destroy');
$router->delete('feedback/delete/{id}', 'TodoController@destroyFeedback');
$router->group(['prefix' => 'backend'], function () use ($router) {
	$router->get('/portofolio', 'TodoController@getPortofolio');
	$router->get('/personal-product-development', 'TodoController@personalProductDevelopment');
});