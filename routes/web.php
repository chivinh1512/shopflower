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


/*Profile*/
Route::get('/profile','ProfileController@profile');
Route::get('/profile/showprofile','ProfileController@showprofile');
Route::post('/profile/showprofile','ProfileController@posteditprofile');
Route::get('/historybill/1','ProfileController@show1');
Route::get('/historybill/2','ProfileController@show2');
Route::get('/historybill/3','ProfileController@show3');
Route::get('/historybill/4','ProfileController@show4');

Route::get('/billdetail/{id}','ProfileController@showbilldetail');

Route::post('/billdetail/{id}','ProfileController@editbill');
Route::get('/billdetail2/{id}','ProfileController@showbilldetail2');


Route::get('/products/{id}','ProductController@showproducts')->name('user.products');
Route::get('/productdetail/{id}','ProductController@showproductdetail');
Route::get('/search','SearchController@search');
Route::get('/contact','ContactController@contact');
Route::post('/contact','ContactController@postcontact');
Route::get('login', function () {
    return view('login');
});
Route::get('auth/facebook', 'Auth\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\FacebookController@handleFacebookCallback');

/*ShoppingCart*/
Route::get('/addproducttocart/{id}','ShoppingcartController@addproducttocart');
Route::get('/delproductincart','ShoppingcartController@delproductincart');
Route::get('/shoppingcart','ShoppingCartController@showcart');
Route::post('/shoppingcart','ShoppingCartController@postbill');

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

/*Bill manager*/
Route::get('/admin/billmanager','BillManagerController@showbills');
Route::get('/admin/billmanager/{id}','BillManagerController@getbilldetail');
Route::get('/admin/billmanager/{id}/{status}','BillManagerController@editstatus');