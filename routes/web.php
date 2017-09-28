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

Route::get('/', 'PagesController');
Route::get('about', 'PagesController');
Route::get('support', 'PagesController');
Route::get('contact-us', 'PagesController');
Route::get('payroll', 'PagesController');
Route::get('control-panel', 'PagesController');
