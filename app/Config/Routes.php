<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('about', 'Home::index1');
$routes->get('index', 'Home::index2');
$routes->get('blog', 'Home::index3');
$routes->get('contact', 'Home::index4');
$routes->get('elements', 'Home::index5');
$routes->get('layout', 'Home::index6');
$routes->get('test', 'Home::index7');
$routes->get('single_listing', 'Home::index9');
$routes->get('offers', 'Home::index8');
// $routes->get('/test', 'TestController::index');

$routes->group('api_Customers', function($routes) {
   

    $routes->get('customers_register','CustomerController::register', ['as' => 'Customers_Register']);
    $routes->post('customers_register','CustomerController::processRegistration', ['as' => 'Customers_processRegistration']);
    $routes->post('customers_verify_otp', 'CustomerController::verifyOTP', ['as' => 'Customers_verifyOTP']);

    $routes->get('customers_sign','CustomerController::login',['as' => 'Customers_sign']);
    $routes->post('customers_sign','CustomerController::processLogin',['as' => 'Customers_processLogin']);

    $routes->get('testEmail', 'CustomerController::testEmail', ['as' => 'testEmail']);
    

    $routes->get('customers_forgot_password', 'CustomerController::forgotPassword',['as' => 'customes_forgot_password']);
    $routes->post('customers_forgot_password', 'CustomerController::processForgotPassword',['as'=>'Customers_processForgotPassword']);
    $routes->post('customers_pass_verify_otp', 'CustomerController::pass_verifyOTP',['as'=>'Customers_processPassVerifyOTP']);
    $routes->post('customers_reset_password', 'CustomerController::resetPassword',['as' => 'Customes_resetPassword']);

    $routes->get('google_login', 'GoogleController::googleLogin', ['as' => 'google_login']);
    $routes->get('google_callback', 'GoogleController::googleCallback', ['as' => 'google_callback']);

});

$routes->get('test','CustomerController::test');