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
    return view('template.index');
});

Route::get('', function () {
    return view('template.content');
});

Route::get('', function () {
    return view('template.contentDetails');
});

Route::get('', function () {
    return view('template.footer');
});

Route::get('', function () {
    return view('template.header');
});

Route::get('', function () {
    return view('template.orderPlaced');
});

Route::get('', function () {
    return view('template.slider');
});

Route::get('', function () {
    return view('template.cart');
});
