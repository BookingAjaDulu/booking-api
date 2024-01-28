<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('/registrasi', 'RegistrasiController::registrasi');
$routes->post('/login', 'LoginController::login');

$routes->group('booking', function ($routes) {
    $routes->post('/', 'BookingController::create');
    $routes->get('/', 'BookingController::list');
    $routes->get('(:segment)', 'BookingController::detail/$1');
    $routes->put('(:segment)', 'BookingController::ubah/$1');
    $routes->delete('(:segment)', 'BookingController::hapus/$1');
});