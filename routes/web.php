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



Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save");

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");


Route::middleware('admin')->group(function () {

    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");

    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.products.index");

   /* Route::get('/admin/products/create', 'App\Http\Controllers\Admin\AdminProductController@create')->name("admin.product.create"); */

    });


Auth::routes();