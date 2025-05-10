<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// registration
$routes->get('/registration', 'RegisterAccount::index');
$routes->post('/register_account', 'RegisterAccount::registerAccount');

// thank you page 
$routes->get('/thank_you/(:any)', 'ThankYouPage::index/$1');

// login
$routes->get('/login', 'Login::index');
$routes->post('/account_login', 'Login::accountLogin');

// Logout
$routes->get('/logout', 'Logout::index');

$routes->group('/admin', static function ($routes) {
    $routes->get('dashboard', 'Admin\Dashboard::index');
});
