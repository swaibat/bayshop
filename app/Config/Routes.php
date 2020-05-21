<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes(true);

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


$routes->group('admin', ['namespace' => 'App\Controllers\Admin'], function ($routes) {
    $routes->add('products', 'Product', );
    $routes->add('products/create', 'Product::create');
    $routes->add('products/(:num)/update', 'Product::update/$1');
    // TYPES
    $routes->add('types', 'Type', );
    $routes->add('types/create', 'Type::create');
    $routes->add('types/(:num)/update', 'Type::update/$1');
    // POSTS
    $routes->add('posts', 'Post', );
    $routes->add('posts/create', 'Post::create');
    $routes->add('posts/(:num)/update', 'Post::update/$1');
    $routes->add('posts/categories', 'Postcategory', );
    $routes->add('posts/categories/create', 'Postcategory::create');
    // PAGES
    $routes->add('pages', 'Page');
    $routes->add('pages/create', 'Page::create');
    $routes->add('pages/(:num)/update', 'Page::update/$1');
    // CATEGORIES
    $routes->add('categories', 'Category');
    $routes->add('categories/create', 'Category::create');
    $routes->add('categories/(:num)/update', 'Category::update');
    $routes->add('delete/(:segment)/(:num)', 'Delete');
    // COUNRRIES
    $routes->add('countries', 'Country');
    // USERS
    $routes->add('users', 'User');
    $routes->add('users/create', 'User::create');
    $routes->add('users/cache', 'User::save_cache');
    $routes->add('users/getcache', 'User::get_cache');
    $routes->add('users/(:num)/update', 'User::update/$1');
    // UNIVERSAL DELETE
    $routes->add('dashboard', 'Dashboard');
    $routes->add('delete/(:segment)/(:num)', 'Delete');
    // SETTINGS
    $routes->add('settings', 'Setting');
    // USERS
    $routes->add('sliders', 'Slider');
    $routes->add('sliders/create', 'Slider::create');
    $routes->add('users/(:num)/update', 'User::update/$1');
    // CHAT
    $routes->add('messages', 'Message');
    $routes->add('messages/create', 'Message::create');
    $routes->add('messages/user/(:num)', 'Message::user/$1');
});

$routes->group('payments', ['namespace' => 'App\Controllers\Payment'], function ($routes) {
    $routes->add('stripe', 'Stripe');
    $routes->add('stripe/pay', 'Stripe::payment');
    $routes->add('paypal', 'Paypal');
    $routes->add('paypal/create', 'Paypal::create');
    $routes->add('paypal/status', 'Paypal::status');
});

$routes->group('auth', ['namespace' => 'App\Controllers\User'], function ($routes) {
    $routes->add('register', 'Auth::register');
    $routes->add('login', 'Auth::login');
    $routes->add('logout', 'Auth::logout');
    $routes->add('verify/(:segment)', 'Auth::verify');
    $routes->add('password_reset', 'Auth::password_reset');
    $routes->add('verify_reset/(:segment)', 'Auth::verify_reset');
});

$routes->group('/', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->add('products', 'Home::products');
    $routes->add('products/(:segment)', 'Home::product');
    $routes->add('shopping/cart', 'Home::shopping_cart');
    $routes->add('shopping/checkout', 'Home::checkout');
    $routes->add('shopping/order', 'Home::order');
    $routes->add('category/(:segment)', 'Home::category_products');
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
