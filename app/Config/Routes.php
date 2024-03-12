<?php
// header('Access-Control-Allow-Origin: http://localhost:8080');
// header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE');
// header('Access-Control-Allow-Headers: Content-Type');

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Auth::index');
$routes->get('/login', 'Auth::login');
$routes->get('/dashboard', 'Auth::dashboard');
$routes->post('/loginprocess', 'Auth::loginprocess');
$routes->get('/logout', 'Auth::logout');




//api's
$routes->get('/api/userList', 'api\UserController::index');
