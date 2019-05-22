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

Route::get('/', 'ProductController@index');

Auth::routes();

Route::get('/succes', 'SuccesController@index');

Route::get('ShoppingCartStore', 'ShoppingCartController@store')->name('store','ShoppingCart');

Route::resource('ShoppingCart', 'ShoppingCartController')->name('index','ShoppingCart');

Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('getAddToCart');