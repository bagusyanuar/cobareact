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


Route::domain('admin.mysecretroom.my.id')->group(function () {

    Route::group(['prefix' => 'client', 'middleware' => 'auth'], function(){
        Route::get('/', 'Master\dashboardController@showPanelClient')->name('dashboard.client');
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
    
    Route::get('/getProducts', 'Master\ProductController@getData');
});


