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

Route::get('/', function () {
    Session::flush();

    Session::put('lang', 'en');

    return view('Home.index');
});
Route::get('/AR', function () {
    Session::flush();
    Session::put('lang','ar');

    return view('Home.index_ar');
});
Route::get('/DU', function () {
    Session::flush();

    Session::put('lang','du');

    return view('Home.index_du');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');

//Route::resource('product', 'ProductController');
Route::get('/product', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@single');
Route::resource('Customer', 'CustomerController');
Route::resource('Category', 'CategoryController');
