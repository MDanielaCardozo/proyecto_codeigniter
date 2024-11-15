<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/libros', 'Libros::index');
$routes->get('/libros/ver/(:num)', 'Libros::ver/$1');
$routes->get('/contacto', 'Contacto::index');



