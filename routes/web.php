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

use Illuminate\Support\Facades\Redirect;

Route::group(['domain' => 'admin.mysecretroom.my.id'], function () {
    Route::get('/client', function () {
        return 'test';
    });
});

Route::get('/', function () {
    return view('login');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/login', function(){
    $url = 'http://admin.mysecretroom.my.id/client';
    Redirect::to($url)->with(['coba' => 'Variable']);
});

Route::get('/getProducts', 'Master\ProductController@getData');

