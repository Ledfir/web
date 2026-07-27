<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\Home;
use App\Controllers\Admin\Auth;
use App\Controllers\Admin\Admin;

/** @var RouteCollection $routes */
$routes->get('/', [Home::class, 'index'], ['as' => 'home']);

$routes->group('admin', function ($routes) {
    $routes->get('login', [Auth::class, 'index'], ['as' => 'admin.login']);
    $routes->get('/', [Admin::class, 'index'], ['as' => 'admin.dashboard', 'filter' => 'auth']);
    $routes->get('quotes', [Admin::class, 'quotes'], ['as' => 'admin.quotes', 'filter' => 'auth']);
    $routes->get('users', [Admin::class, 'users'], ['as' => 'admin.users', 'filter' => 'auth']);
    $routes->get('config', [Admin::class, 'config'], ['as' => 'admin.config', 'filter' => 'auth']);
    $routes->get('logout', [Auth::class, 'logout'], ['as' => 'admin.logout', 'filter' => 'auth']);

    $routes->post('auth', [Auth::class, 'attemptLogin'], ['as' => 'admin.login.post']);
});
