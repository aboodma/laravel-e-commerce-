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

Route::get('/GrAdmin','AdminController@index');
Route::get('/GrAdmin/Product/Add','AdminController@ProductAdd');
Route::post('/GrAdmin/Product/Create','AdminController@ProductCreate');
Route::post('/GrAdmin/Product/image','AdminController@Productimage');
Route::get('/GrAdmin/Product','AdminController@Product');
Route::get('/GrAdmin/Categories/Add','AdminController@CategoryAdd');
Route::get('/GrAdmin/Categories/AddSub','AdminController@CategorySubAdd');
Route::get('/GrAdmin/Categories','AdminController@Categoies');
Route::get('/GrAdmin/Sizes/Add','AdminController@SizeAdd');
Route::get('/GrAdmin/Sizes','AdminController@Sizes');
Route::get('/GrAdmin/Shipping/Add','AdminController@ShippingAdd');
Route::get('/GrAdmin/Shipping','AdminController@Shipping');
Route::get('/GrAdmin/Home/SlidersAdd','AdminController@SlidersAdd');
Route::post('/GrAdmin/Home/saveimage','AdminController@imagesave');
Route::post('/GrAdmin/Home/createSlider','AdminController@createSlider');


// Route::resource('Customer', 'CustomerController');
// Route::resource('Category', 'CategoryController');
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
// Route::get('/Category', function () {
//     return App\Product::paginate(2);
// });
Route::get('/Category/{sub_Category}','SubCategoryController@single');
Route::get('/cart/{product_id}/{quantity}/{price}/{name}/{size}/{sizeid}','CartController@AddCart');
Route::get('/cart/show','CartController@show');
Route::get('/cart/flash','CartController@flash');
Route::get('/cart/ship/{id}','CartController@ship');
Route::get('/Customer/Check','CustomerController@checkLogin');
Route::get('/login','CustomerController@index');
Route::get('/Register','CustomerController@Register');
