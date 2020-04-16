<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
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
// $routes->get('news', 'Admin::index');
// $routes->get('news', 'Admin::index');
// $routes->match(['get', 'post'], 'admin/products/create', 'Admin::create');
// $routes->match(['get', 'post'], 'admin/products/(:num)/update', 'Admin::update/$1');


$routes->group('admin', function($routes)
{
	$routes->add('products', 'Product',);
	$routes->add('products/create', 'Product::create');
	$routes->add('products/(:num)/update', 'Product::update/$1');
	$routes->add('categories', 'Category');
	$routes->add('categories/create', 'Category::create');
	$routes->add('categories/(:num)/update', 'Category::update/$1');
	$routes->add('delete/(:segment)/(:num)', 'Delete');
});

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
