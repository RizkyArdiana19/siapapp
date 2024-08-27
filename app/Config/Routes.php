<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::home');
$routes->get('/login', 'Home::login');
$routes->get('/user', 'Home::user');

$routes->post('/login', 'Home::login');
$routes->post('/user', 'Home::user');

$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
