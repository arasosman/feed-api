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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/feeds', 'FeedController@index');
$router->get('/feeds/hashtag', 'FeedController@get_by_hashtag_name');
$router->post('/feeds', 'FeedController@store');
