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

Route::get('/', 'ProductController@index')->name('home');

Auth::routes();

Route::get('/succes', 'SuccesController@index');

Route::get('/orders', 'SuccesController@orderComplete')->name('orders')->middleware('auth');

Route::resource('/shoppingcart', 'ShoppingCartController');

Route::get('/category/{id}', 'CategoryController@show')->name('categories');



//Route::get('/add-to-cart/{id}', 'ProductController@getAddToCart')->name('getAddToCart');