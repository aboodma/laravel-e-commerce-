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



//Admin Routes
Route::get('/GrAdmin','AdminController@index');
Route::get('/GrAdmin/Product/Add','AdminController@ProductAdd');
Route::get('/GrAdmin/Product','AdminController@Product');
Route::get('/GrAdmin/Categories/Add','AdminController@CategoryAdd');
Route::get('/GrAdmin/Categories/AddSub','AdminController@CategorySubAdd');
Route::get('/GrAdmin/Categories','AdminController@Categoies');
Route::get('/GrAdmin/Sizes/Add','AdminController@SizeAdd');
Route::get('/GrAdmin/Sizes','AdminController@Sizes');
Route::get('/GrAdmin/Shipping/Add','AdminController@ShippingAdd');
Route::get('/GrAdmin/Shipping','AdminController@Shipping');
Route::get('/GrAdmin/Home/SlidersAdd','AdminController@SlidersAdd');
//Post Type Requests
Route::post('/GrAdmin/Home/saveimage','AdminController@imagesave');
Route::post('/GrAdmin/Home/createSlider','AdminController@createSlider');
Route::post('/GrAdmin/Product/Create','AdminController@ProductCreate');
Route::post('/GrAdmin/Product/image','AdminController@Productimage');
// Admin Routes End Here


//Client Requests
/* Visitors Route And Change Language AndChange Currency */
//Home Page
Route::get('/', 'VisitorController@index');
//Change Currency
Route::get('/currency', 'VisitorController@ChangeCurrency');
//Change Language
Route::get('/lang', 'VisitorController@ChangeLang');
/* Visitors Route End here */

/* Visitors Route And Change Language AndChange Currency */
Route::get('/product/{product}', 'ProductController@single');


/* Category Route */
Route::get('/Category','SubCategoryController@index');
Route::get('/Category/{sub_Category}','SubCategoryController@single');
/* Cart Routes */
Route::get('/cart/{product_id}/{quantity}/{price}/{name}/{size}/{sizeid}','CartController@AddCart');
Route::get('/cart/delete/{id}','CartController@deleteCart');
Route::get('/cart/show','CartController@show');
Route::get('/cart/flash','CartController@flash');
Route::get('/cart/ship/{id}','CartController@ship');
/* Cart Post Requests*/
/*1*/ Route::post('/cart/order','CartController@insert');

/* Customer Routes*/
Route::get('/Customer/Check','CustomerController@checkLogin');
Route::get('/login','CustomerController@index');
Route::get('/Register','CustomerController@Register');
/* Customer Post Requests Routes*/
Route::post('/Customer/login','CustomerController@Login');
