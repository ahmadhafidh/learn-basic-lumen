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

$router->get('/helloworld', function () {
    return "<h1>Santri Koding</h1><p>Selamat Datang di santrikoding.com</p>";
});

$router->get('/helloworld/{name}', function ($name) {
    return "<h1>Santri Koding</h1><p>Hai, " . $name . ", Selamat Datang di santrikoding.com</p>";
});

$router->get("/belajarMiddleware/{umur}", ['middleware' => 'checkumur', function ($umur) {
    return "Umur anda adalah " . $umur;
}]);

$router->get('user', 'UserController@index');
$router->get('user/tampil', 'UserController@getIndexViews');