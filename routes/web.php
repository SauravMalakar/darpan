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

Route::get('/', 'UserController@dhome_index');
Route::get('/services', 'UserController@dservice_index');
Route::get('/about_us', 'UserController@dabout_index');
Route::get('/pricing', 'UserController@dprice_index');
Route::get('/contact', 'UserController@dcontact_index');
Route::get('/advisor', 'UserController@dadvisor_index');
Route::get('/customer_reg','UserController@customer_reg');
Route::get('/product_cart','UserController@product_cart');
Route::get('/product_checkout','UserController@product_checkout');
Route::get('/portpay','UserController@portwallet_pay');