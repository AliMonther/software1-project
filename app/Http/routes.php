<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/registerGuest', function () {
    return view('users.registerGuest');
});

Route::get('/loginCustomer', function () {
    return view('users.loginCustomer');
});

Route::get('/addProduct', function () {
    return view('users.addProduct');
});

Route::get('/deleteProduct', function () {
    return view('users.deleteProduct');
});

Route::get('/editProduct', function () {
    return view('users.editProduct');
});

Route::get('/adminHome', function () {
    return view('users.adminHome');
});

Route::get('/index/{userName}','userConstroller@RegisterUser');

Route::post('/index/{userName}','userConstroller@RegisterUser');

Route::post('/registerGuest','userConstroller@RegisterUser');
/**
 * routing the request to user controller in userValid method to check if user is exist or no
 */
Route::post('/userValid','userConstroller@userValid');
/**
 * click on login button in login form
 */
Route::post('/login','userConstroller@loginCustomer');
/**
 * click on show product button in main page
 */
Route::post('/showProduct','userConstroller@showProduct');
/**
 * click on add product button in admin control panel (this service to admin only)
 */
Route::post('/addProduct','productController@addProduct');
/**
 * click on delete button in admin control panel (this service to admin only)
 */
Route::post('/deleteProduct','productController@deleteProduct');
/**
 * click on update product button in admin control panel (this service to admin only)
 */
Route::post('/updateProduct','productController@updateProduct');
/**
 * click on search button in main page
 */
Route::post('/search','searchController@search');

