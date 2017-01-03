<?php

use Illuminate\Routing\Router;

/**
 * demo
 */
Route::group([
//    'middleware' => 'auth:api',
    'namespace' => 'App\Wechat',
    'prefix' => 'Project'
], function (Router $router) {
    Route::get('/', function () {
        echo "welcome";
    });
    Route::get('/test', "ApiController@boot");
    Route::get('/view', function (){
        return view('views::test');
    });
});