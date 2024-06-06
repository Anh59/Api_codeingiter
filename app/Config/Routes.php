<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/test', 'TestController::index');


$routes->get('/login', 'LoginController::index');
$routes->post('/login', 'LoginController::sentlogin');

$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::sentregister');

$routes->get('/table', 'RegisterController::table');

$routes->get('/register', 'RegisterController::index');
$routes->post('/register', 'RegisterController::sentregister');
$routes->get('/verify', 'RegisterController::verify');
$routes->post('/confirm-otp', 'RegisterController::confirmOTP');


$routes->get('/request-reset', 'PasswordController::requestReset');
$routes->post('/request-reset', 'PasswordController::sendResetOTP');
$routes->get('/verify-reset-otp', 'PasswordController::verifyResetOTP');
$routes->post('/verify-reset-otp', 'PasswordController::confirmResetOTP');
$routes->get('/reset-password', 'PasswordController::resetPassword');
$routes->post('/reset-password', 'PasswordController::updatePassword');





$routes->group('api', function($routes) {
   
    $routes->resource('user', ['controller' => 'APIController']);
    $routes->post('/user','APIController::create');
    $routes->get('/user/(:num)', 'APIController::show/$1');
    $routes->put('/user/(:num)', 'APIController::update/$1');
    $routes->delete('/user/(:num)', 'APIController::delete/$1');
    $routes->post('/user/(:num)', 'APIController::filecode/$1');


 
});
