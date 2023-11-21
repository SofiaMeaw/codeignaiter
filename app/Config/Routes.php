<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users/(:num)', 'Users::index/$1');
$routes->post('/users/add_user', 'Users::add_user');
$routes->post('/users/add', 'Users::add');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->post('/users/update/(:num)', 'Users::update/$1');
$routes->get('/users/delete/(:num)', 'Users::delete/$1');
$routes->post('/users/login', 'Users::login');
$routes->get('/users/logout', 'Users::logout');
$routes->post('/users/add_image/(:num)', 'Users::add_image/$1');
$routes->get('/users/delete_image/(:num)/(:segment)', 'Users::delete_image/$1/$2');

