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

// reset password
$routes->get('/reset_password', 'ResetPassword::index');
$routes->post('/send_reset_password_link', 'ResetPassword::sendResetPasswordLink');

// set new password
$routes->get('/save_new_password/(:any)', 'SaveNewPassword::index/$1');
$routes->post('/save_new_password/(:any)', 'SaveNewPassword::saveNewPassword/$1');

// Logout
$routes->get('/logout', 'Logout::index');

// Imagepixel
$routes->get('/imagepixel/(:any)', 'Imagepixel::index/$1');

$routes->group('/admin', static function ($routes) {
    $routes->get('dashboard', 'Dashboard::index');
});
