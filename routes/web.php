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

Route::domain('admin.mysecretroom.my.id')->group(function () {
    Route::get('/', function () {
        return 'oke';
    });
    
    Route::get('/client', function () {
        return view('home');
    });
});

Route::domain('mysecretroom.my.id')->group(function(){
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('/postlogin', 'Auth\LoginController@postlogin');
    Route::get('/logout', 'Auth\LoginController@logout');

    Route::get('/dashboard', function(){
        return view('dashboard');
    });
    
    Route::get('/product', function () {
        return view('product');
    });
    
    Route::get('/login', function(){
        $url = 'http://admin.mysecretroom.my.id/client';
        return Redirect::to($url)->with(['coba' => 'Variable']);
    });
    
    Route::get('/getProducts', 'Master\ProductController@getData');
});


