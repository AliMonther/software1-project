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
Route::get();
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
Route::post('/userValid','userConstroller@userValid');
Route::post('/login','userConstroller@loginCustomer');
Route::post('/showProducts','userConstroller@showProducts');
Route::post('/addProduct','productController@addProduct');
Route::post('/deleteProduct','productController@deleteProduct');
Route::post('/updateProduct','productController@updateProduct');
Route::post('/search','searchController@search');

