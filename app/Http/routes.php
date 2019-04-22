<?php

$router->get('/', 'App\Controllers\HomeController@index')->allow('Guest')->named('home_guest');

// Scaffolding Authentication
$router->get('/auth/login', 'App\Controllers\AuthController@login')->allow('Guest')->named('auth.login');
$router->post('/auth/login', 'App\Controllers\AuthController@postLogin')->allow('Guest')->named('auth.login.post');
$router->get('/auth/logout', 'App\Controllers\AuthController@logout')->allow('Auth')->named('auth.logout');