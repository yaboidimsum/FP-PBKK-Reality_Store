<?php

use CodeIgniter\Router\RouteCollection;


/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// Route since we don't have to scan directories.
$routes->get('/', 'ProdukCrud::index');

// CRUD Produk
$routes->get('produk-list', 'ProdukCrud::admin');
$routes->get('produk-form', 'ProdukCrud::create');
$routes->post('submit-produk', 'ProdukCrud::store');
$routes->get('edit-produk/(:num)', 'ProdukCrud::singleProduk/$1');
$routes->post('update-produk', 'ProdukCrud::update');
$routes->get('delete-produk/(:num)', 'ProdukCrud::delete/$1');
$routes->get('home', 'ProdukCrud::index');
$routes->get('confirmation', 'ProdukCrud::confirmation');

// CRUD User
$routes->get('user-list', 'UserCrud::admin');
$routes->get('user-form', 'UserCrud::create');
$routes->post('submit-user', 'UserCrud::store');
$routes->get('edit-user/(:num)', 'UserCrud::singleUser/$1');
$routes->post('update-user', 'UserCrud::update');
$routes->get('delete-user/(:num)', 'UserCrud::delete/$1');

// Checkout & Detail Checkout
$routes->get('checkout-list', 'CheckoutController::checkoutList');
$routes->get('detail-list', 'DetailController::detailList');

// Route Buy
$routes->get('produk-formuser', 'CheckoutController::create');
$routes->post('add-item', 'CheckoutController::store');
$routes->get('confirmation', 'CheckoutController::confirmation');

//History
$routes->get('history-list', 'DetailController::history');

// Login & Register
$routes->get('login', 'AuthController::login');

