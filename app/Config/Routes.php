<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index', ['filter' => 'authentification']);
// ###############
// PRODUCT ROUTE :
// ###############
$routes->get('/products', 'Products::index', ['filter' => 'authentification']);
$routes->get('/product/(:num)', 'Products::show/$1', ['filter' => 'authentification']);

$routes->post('/products', 'Products::add', ['filter' => 'authentification']);
$routes->post('/product/(:num)', 'Products::update/$1', ['filter' => 'authentification']);

// ###############
// STORAGE ROUTE :
// ###############
$routes->get('/storages', 'Storages::index', ['filter' => 'authentification']);
$routes->get('/storage/(:num)', 'Storages::show/$1', ['filter' => 'authentification']);

$routes->post('/storages', 'Storages::add', ['filter' => 'authentification']);
$routes->post('/storage/(:num)', 'Storages::update/$1', ['filter' => 'authentification']);

$routes->get('/storage/delete/(:num)', 'Storages::delete/$1', ['filter' => 'authentification']);

// #####################
// REPLENISHMENT ROUTE :
// #####################
$routes->get('/replenishments', 'Replenishment::index', ['filter' => 'authentification']);
$routes->get('/replenishment/(:num)', 'Replenishment::show/$1', ['filter' => 'authentification']);

// ###########
// ORDER ROUTE
// ###########
$routes->get('/orders', 'Orders::index', ['filter' => 'authentification']);
$routes->get('/order/(:num)', 'Orders::show/$1', ['filter' => 'authentification']);

// ###########
// USERS ROUTE
// ###########
$routes->get('/users','Users::index', ['filter' => 'authentification']);
$routes->get('/user/(:num)','Users::show/$1', ['filter' => 'authentification']);

$routes->get('user/delete/(:num)','Users::delete/$1', ['filter' => 'authentification']);

$routes->post('/users','Users::add', ['filter' => 'authentification']);
$routes->post('/user/(:num)','Users::update/$1', ['filter' => 'authentification']);

// ################
// ENTREPRISE ROUTE
// ################
$routes->get('/entreprise','Entreprises::index', ['filter' => 'authentification']);
$routes->post('/entreprise','Entreprises::update', ['filter' => 'authentification']);

// ##########
// LOGS ROUTE
// ##########
$routes->get('/logs','Logs::index', ['filter' => 'authentification']);

// ###########
// LOGIN ROUTE
// ###########
$routes->get('/se-connecter','Login::index'); // GET LOGIN PAGE
$routes->post('/se-connecter','Login::index'); // GET LOGIN PAGE WHEN POST FORM

$routes->get('/se-creer-un-compte','Login::register'); // GET REGISTER PAGE
$routes->post('/se-creer-un-compte','Login::register'); // GET REGISTER PAGE WHEN POST FORM

$routes->get('/disconnect','Login::disconnect', ['filter' => 'authentification']); // DISCONNECT USER

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
