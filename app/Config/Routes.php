<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');

$routes->get('/user', 'Home::user');
$routes->post('/user', 'Home::user');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');

$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
