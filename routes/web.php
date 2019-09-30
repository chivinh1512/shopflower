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


Route::get('/','IndexController@showindex')->name('home');
Route::get('/shoppingcart','ShoppingCartController@showcart');
Route::get('/products','ProductController@showproducts');
Route::get('/productdetail','ProductController@showproductdetail');
Route::get('login', function () {
    return view('login');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');
