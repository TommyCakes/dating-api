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

$router->get('/key', function() {    
    return Str::random(32);
});

$router->group(['prefix' => 'matchme/api/v1'], function() use ($router) 
{   
    $router->get('test', function() 
    {
        return 'Hello!';
    });

    # User Endpoints
    $router->get('user', 'UserController@index');
});


