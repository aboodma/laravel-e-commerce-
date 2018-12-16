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

Route::get('/GrAdmin/login','AdminController@login');
Route::post('/GrAdmin/logg','AdminController@logg');
 /* Search route*/
 Route::post('/search','VisitorController@search');


//Admin Routes
Route::get('/GrAdmin','AdminController@index');
Route::get('/GrAdmin/Sizes/Add','AdminController@SizeAdd');
Route::get('/GrAdmin/Sizes','AdminController@Sizes');
Route::get('/GrAdmin/Orders','AdminController@Orders');
Route::get('/GrAdmin/order/status/cancel/{id}','AdminController@orderCancel');
Route::get('/GrAdmin/order/status/complete/{id}','AdminController@ordercomplete');
Route::get('/GrAdmin/order/status/delete/{id}','AdminController@orderdelete');
Route::get('/GrAdmin/Settings','AdminController@Settings');
Route::post('/GrAdmin/Setting/update','AdminController@updateS');
//Home Routes
Route::get('/GrAdmin/Home/SlidersAdd','AdminController@SlidersAdd');
Route::post('/GrAdmin/Home/saveimage','AdminController@imagesave');
Route::post('/GrAdmin/Home/createSlider','AdminController@createSlider');
Route::get('/GrAdmin/Home/Sliders','AdminController@Sliders');
//products Routes
Route::get('/GrAdmin/Product/Add','AdminController@ProductAdd');
Route::get('/GrAdmin/Product','AdminController@Product');
Route::post('/GrAdmin/Product/Create','AdminController@ProductCreate');
Route::post('/GrAdmin/Product/image','AdminController@productImage');
Route::post('/GrAdmin/Product/Sizes','AdminController@productSizes');
Route::get('/GrAdmin/Product/Edit/{id}','AdminController@ProductEdit');
// Categories Routes
Route::get('/GrAdmin/Categories/Add','AdminController@CategoryAdd');
Route::get('/GrAdmin/Categories','AdminController@Categoies');
Route::get('/GrAdmin/Category/Edit/{id}','AdminController@CategoryEdit');
Route::post('/GrAdmin/Category/image','AdminController@categoryImage');
Route::post('/GrAdmin/Category/insert','AdminController@categoryinsert');
Route::post('/GrAdmin/Category/update','AdminController@categoryupdate');
// subCategory
Route::get('/GrAdmin/subCat','AdminController@subCat');
Route::get('/GrAdmin/Categories/AddSub','AdminController@CategorySubAdd');
Route::get('/GrAdmin/subCategory/Edit/{id}','AdminController@subCategoryEdit');
Route::post('/GrAdmin/subCategory/image','AdminController@subcategoryImage');
Route::post('/GrAdmin/SubCategory/image','AdminController@subcategoryImage');
Route::post('/GrAdmin/subCategory/update','AdminController@subcategoryupdate');
Route::post('/GrAdmin/SubCategory/insert','AdminController@subcategoryinsert');
//Ship Routes
Route::get('/GrAdmin/Shipping/Add','AdminController@ShippingAdd');
Route::get('/GrAdmin/Shipping','AdminController@Shipping');
Route::get('/GrAdmin/Shipping/Edit/{id}','AdminController@ShippingEdit');
Route::post('/GrAdmin/ship/add','AdminController@shipAdd');
Route::post('/GrAdmin/ship/update','AdminController@shipupdate');
// Coupons Routes
Route::get('/GrAdmin/Coupons','AdminController@coupons');
Route::get('/GrAdmin/Coupons/Add','AdminController@couponsAdd');
Route::post('/GrAdmin/Coupons/add','AdminController@couponsaddpost');
Route::get('/GrAdmin/Coupons/Edit/{id}','AdminController@couponsedit');
Route::post('/GrAdmin/Coupons/update','AdminController@couponsupdate');

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
Route::get('/profile','CustomerController@profile');
Route::get('/wishlist','CustomerController@wishlist');
Route::get('/orders','CustomerController@orders');
Route::get('/order/{id}','CustomerController@order');
Route::get('/wishadd/{product_id}/{quantity}/{price}/{name}','CustomerController@wish');
Route::get('/wishremove/{id}','CustomerController@wishremove');

/* Customer Post Requests Routes*/
Route::post('/Customer/login','CustomerController@Login');
Route::post('/Customer/register','CustomerController@store');
Route::post('/Customer/logout','CustomerController@destroy');
Route::post('/updateProfile','CustomerController@update');
