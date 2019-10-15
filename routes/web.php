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

//front
Route::get('/', 'FrontController@index')->name('home');
Route::get('/shop', 'FrontController@shop')->name('shop');
Route::get('/mens/{slug}', 'FrontController@category')->name('category');
Route::get('/category_pagination', 'FrontController@category_pagination');
Route::get('/buy/{slug}', 'FrontController@product')->name('product');
Route::get('/about-us', 'FrontController@about')->name('about');
Route::get('/faq', 'FrontController@faq')->name('faq');
Route::get('/contact-us', 'FrontController@contact')->name('contact');

//cart
Route::get('/my-cart', 'CartController@index')->name('cart');
Route::post('/my-cart/add', 'CartController@add')->name('cartadd');
Route::post('/my-cart/apply-coupon', 'CartController@applyCoupon')->name('cartcoupon');
Route::get('/my-cart/remove-coupon', 'CartController@removeCoupon')->name('cartremovecoupon');
Route::get('/my-cart/remove/{id}', 'CartController@remove')->name('cartremove');
Route::get('/my-cart/update/{id}/{qty}', 'CartController@update')->name('cartupdate');

//my account
Route::get('/my-account', 'MyAccountController@index')->name('myaccount');
Route::get('/my-account/wishlist', 'MyAccountController@wishlist')->name('myaccountwishlist');
Route::get('/my-account/wishlist/remove/{id}', 'MyAccountController@wishlistremove')->name('myaccountwishlistremove');
Route::get('/my-account/wishlist/add/{id}', 'MyAccountController@wishlistadd')->name('myaccountwishlistadd');

Auth::routes();

