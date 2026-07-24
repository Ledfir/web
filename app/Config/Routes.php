<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Home;
use App\Controllers\Admin\Auth;
use App\Controllers\Admin\Admin;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->group('admin', function ($routes) {
    $routes->get('login', [Auth::class, 'index'], ['as' => 'admin.login']);
    $routes->get('/', [Admin::class, 'index'], ['as' => 'admin.dashboard']);
    $routes->get('quotes', [Admin::class, 'quotes'], ['as' => 'admin.quotes']);
    $routes->get('users', [Admin::class, 'users'], ['as' => 'admin.users']);
    $routes->get('config', [Admin::class, 'config'], ['as' => 'admin.config']);

    $routes->post('auth', [Auth::class, 'login'], ['as' => 'admin.login.post']);
});
