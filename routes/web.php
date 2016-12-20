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
//home
Route::get('/', 'IndexController@index');
Route::get('/index', 'IndexController@index');

//products -> all and filtered
Route::get('/overview', 'ProductController@index');
Route::get('/overview/description', 'DescriptionController@index');

//logout
Route::get('/logout', 'LogoutController@index');

//account
Route::get('/account', 'AccountController@index');
Route::get('/account/edit', 'AccountController@edit');
Route::get('/account/remove', 'AccountController@remove');

//profile
Route::get('/profile', 'ProfileController@index');

//sell
Route::get('/sell', 'SellController@index');
Route::get('/sell/add', 'SellController@add');
Route::get('/sell/edit', 'SellController@edit');
Route::get('/sell/remove', 'SellController@remove');  

//shoppingcart
Route::get('/shoppingcart', 'ShoppingCartController@index');
Route::get('/shoppingcart/edit', 'ShoppingCartController@edit');
Route::get('shoppingcart/remove', 'ShoppingCartController@remove');

//buy
Route::get('/buy', 'BuyController@index');
    
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
