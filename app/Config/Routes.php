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


$routes->group('tour', ['namespace' => 'App\Controllers'], function($routes) {
    // Route cho danh sách tour
    $routes->get('offers', 'TourController::index');
    
    // Route cho load danh sách tour bằng AJAX
    $routes->get('load_tours', 'TourController::load_tours');
    
    // Route cho chi tiết tour
    $routes->get('getTour/(:num)', 'TourController::getTour/$1');
    
    // Route cho load chi tiết tour bằng AJAX
    $routes->get('load_detail/(:num)', 'TourController::load_detail/$1');

    // Route chuyển đến trang chi tiết của tour
    $routes->get('single_listing/(:num)', 'TourController::singleListing/$1');




});

$routes->group('tour', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('test', 'SingleController::index'); // Hiển thị danh sách các tour
    $routes->get('detail/(:num)', 'SingleController::single_listing/$1'); // Hiển thị chi tiết tour với ID
});



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


$routes->get('code','CumtomerController::code');

$routes->get('codse','CumtomerController::code');
$routes->get('test','CustomerController::test');