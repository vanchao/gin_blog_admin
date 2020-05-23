<?php

use Illuminate\Routing\Router;
use \App\Admin\Controllers\UserController;
use \Encore\Admin\Facades\Admin;
use \Illuminate\Support\Facades\Route;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('admin.home');

    $router->resource('users', UserController::class);

    $router->get('demo/users', 'UserController@index');

});
