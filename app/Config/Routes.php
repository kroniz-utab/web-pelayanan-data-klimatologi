<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
// $routes->get('/', 'Home::index');

// HOME HANDLER
$routes->get('/', 'DataController::coba');

// INPUT HANDLER
$routes->get('/input', 'DataController::inputData');
$routes->post('/input/save', 'DataController::create');

// MONITORING HANDELR
// $routes->get('/monitor', 'DataController::monitoring');
$routes->get('/monitor', 'MonitorController::status');
$routes->get('/monitor/status', 'MonitorController::stat');
$routes->get('/monitor/(:segment)', 'MonitorController::details/$1');

// ABOUT HANDLER
$routes->get('/about', 'DataController::about');

// COBA HANDLER
// $routes->get('/coba', 'DataController::pengen');

/**
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need to it be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
