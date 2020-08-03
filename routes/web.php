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

Route::get('/', function () {
    return view('layout.admin-layout');
});

Route::get('/list', function () {
    return view('products.list');
});

Route::get('/form', function () {
    return view('products.form');
});

Route::resource('products', 'ProductController');
