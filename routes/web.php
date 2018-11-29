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

Route::get('/', 'VisitorController@index');
Route::get('/out', 'VisitorController@out');
Route::get('/currency', 'VisitorController@ChangeCurrency');
Route::get('/lang', 'VisitorController@ChangeLang');



Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

//Route::resource('product', 'ProductController');
Route::get('/product', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@single');
Route::resource('Customer', 'CustomerController');
Route::resource('Category', 'CategoryController');
