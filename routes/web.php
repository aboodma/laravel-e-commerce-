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


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

//Route::resource('product', 'ProductController');
Route::get('/product', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@single');
Route::resource('Customer', 'CustomerController');
Route::resource('Category', 'CategoryController');
/* Visitors Route And Change Language AndChange Currency */
//Home Page
Route::get('/', 'VisitorController@index');
//Change Currency
Route::get('/currency', 'VisitorController@ChangeCurrency');
//Change Language
Route::get('/lang', 'VisitorController@ChangeLang');

