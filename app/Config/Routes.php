<?php

namespace Config;

use CodeIgniter\Commands\Utilities\Routes;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Login
$routes->get('/', 'Admin\AdminController::index');
$routes->post('/login', 'Admin\AdminController::login');
$routes->get('/logout', 'Admin\AdminController::logout');

// Routes Barang
// $routes->get('/', 'Barang\BarangController::index');
$routes->get('/dashboard', 'Barang\BarangController::index', ['filter' => 'autha']);
$routes->get('/barang', 'Barang\BarangController::read');
$routes->add('/barang/add', 'Barang\BarangController::add');
$routes->add('/barang/cetak', 'Barang\BarangController::cetak');
$routes->add('/barang/(:num)/update', 'Barang\BarangController::update/$1');
$routes->get('/barang/(:num)/delete', 'Barang\BarangController::delete/$1');

$routes->get('/databarangkeluar', 'Barang\BarangKeluarController::read', ['filter' => 'autha']);
$routes->get('/datakeluar', 'Barang\BarangController::getID',  ['filter' => 'autha']);
$routes->post('/datakeluar', 'Barang\BarangKeluarController::barangKeluar');
$routes->post('/tampilKode', 'Barang\BarangController::tampilKode');
// $routes->get('/tampilKode', 'Barang\BarangController::tampilKode');
$routes->post('/barangKeluar', 'Barang\BarangKeluarController::barangKeluar');
$routes->get('/barangKeluar/delete/(:num)', 'Barang\BarangKeluarController::delete/$1');



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
