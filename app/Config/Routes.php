<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->post('login', 'Auth::login');

$routes->group('api', ['filter' => 'jwt'], function($routes) {
    $routes->resource('mahasiswa');
    $routes->get('mahasiswa/(:num)', 'Mahasiswa::show/$1');
    $routes->post('mahasiswa', 'Mahasiswa::create');
    $routes->put('mahasiswa/(:num)', 'Mahasiswa::update/$1');
    $routes->delete('mahasiswa/(:num)', 'Mahasiswa::delete/$1');
});