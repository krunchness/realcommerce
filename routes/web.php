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


Route::get('/', 'FrontShopController@home')->name('home');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'auth.admin']], function(){
	Route::get('/', function() {
	    return view('admin.dashboard');
	})->name('admin.index');

	Route::resource('/product', 'ProductController');

	Route::resource('/category', 'CategoryController');
});
