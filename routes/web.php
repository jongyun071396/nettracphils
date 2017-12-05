<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
	// Route::get('login', 'testLogin@index');
	// Route::post('/post', 'testLogin@store');


Route::get('/', 'PagesController@index');
Route::post('/insert', 'Controller@insert');
Route::get('about', 'PagesController');
Route::get('support', 'PagesController');
Route::get('contact-us', 'PagesController');
// Route::get('login', 'PagesController');
// Route::post('login', 'PagesController@register');
Route::get('payroll', 'PagesController');
Route::get('control-panel', 'PagesController');
Route::post('login', 'PagesController@authenticate');
Route::get('privacy', 'PagesController');
Route::get('terms-of-service', 'PagesController');
Route::get('employment', 'PagesController');
Route::get('site-map', 'PagesController');
Route::get('registration', 'PagesController');
Route::post('register','PagesController@register');

Route::post('getCart','cart_controller@getCart');
Route::get('cart','cart_controller@cart_view');
Route::post('remove_cart','cart_controller@remove_cart');
Route::post('increase_cart','cart_controller@increase_cart');
//Route::post('decrease_cart','PagesController@decrease_cart');
Route::get('customer_login','PagesController@customer_login');
Route::get('checkout-process', 'Transactions@paypal_checkout_process');

Route::get('checkout','PagesController@checkout');
Route::post('payment_login','PagesController@payment_login');
Route::post('payment','Transactions@checkout');

Route::get('sign-out', 'PagesController@sign_out');

// // PAGE CONTROLLER
// Route::get('/', 'PagesController@index');
// Route::get('terms-of-service', 'PagesController');
// Route::get('about', 'PagesController');
// Route::get('support', 'PagesController');
// Route::get('contact-us', 'PagesController');
// Route::get('payroll', 'PagesController');
// Route::get('control-panel', 'PagesController');
// Route::get('privacy', 'PagesController');
// Route::get('employment', 'PagesController');
// Route::get('site-map', 'PagesController');
// Route::get('registration', 'PagesController');
// // PAGE CONTROLLER WITH DIFFERENT FUNTIONS
// Route::get('customer_login','PagesController@customer_login');
// Route::get('checkout','PagesController@checkout');
// Route::get('sign-out', 'PagesController@sign_out');
// Route::post('payment_login','PagesController@payment_login');
// Route::post('register','PagesController@register');
// Route::post('login', 'PagesController@authenticate');
// //CART CONTROLLER
// Route::get('cart','cart_controller@cart_view');
// Route::post('remove_cart','cart_controller@remove_cart');
// Route::post('increase_cart','cart_controller@increase_cart');
// //TRANSACTIONS CONTROLLER
// Route::get('checkout-process', 'Transactions@paypal_checkout_process');
// Route::post('payment','Transactions@checkout');