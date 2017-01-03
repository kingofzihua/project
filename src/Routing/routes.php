<?php

use Illuminate\Routing\Router;

/**
 * demo
 */
Route::group([
//    'middleware' => 'auth:api',
    'namespace' => 'App\Wechat',
    'prefix' => 'demo'
], function (Router $router) {
    Route::get('/', function () {
        echo "oh my gods";
    });
    Route::get('/test', "ApiController@boot");
});