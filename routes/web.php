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
Route::get('/products/{id}','ProductController@showproducts')->name('user.products');
Route::get('/productdetail/{id}','ProductController@showproductdetail');
Route::get('/search','SearchController@search');
Route::get('login', function () {
    return view('login');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

/*ShoppingCart*/
Route::get('/addproducttocart/{id}','ShoppingcartController@addproducttocart');
Route::get('/delproductincart','ShoppingcartController@delproductincart');

/*Admin Controller*/
Route::get('/admin','AdminController@admin');

/*Category manager*/
Route::get('/admin/categorymanager','CategoryManagerController@showcategories');
Route::get('/admin/categorymanager/delete/{id}','CategoryManagerController@delete');
Route::post('/admin/categorymanager','CategoryManagerController@postcategories');
Route::get('/admin/categorymanager/edit/{id}','CategoryManagerController@geteditcategory');
Route::post('/admin/categorymanager/edit/{id}','CategoryManagerController@postedit');

/*Product manager*/
Route::get('/admin/productmanager','ProductManagerController@showproducts');
Route::get('/admin/productmanager/delete/{id}','ProductManagerController@delete');
Route::post('/admin/productmanager','ProductManagerController@postproducts');
Route::get('/admin/productmanager/edit/{id}','ProductManagerController@geteditproduct');
Route::post('/admin/productmanager/edit/{id}','ProductManagerController@postedit');
