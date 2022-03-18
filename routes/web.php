<?php

use Illuminate\Support\Facades\Route;

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




/* Home */

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");


/* Products */

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create");

Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");

/* User */

Route::get('/user', 'App\Http\Controllers\UserController@index')->name("user.index");

Route::get('/user/register', 'App\Http\Controllers\UserController@register')->name("user.register");


