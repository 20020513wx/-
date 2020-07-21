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

Route::get('/','Index\LoginController@login');
Route::get('loginDo','Index\LoginController@loginDo');
Route::get('reg','Index\LoginController@reg');
Route::get('regDo','Index\LoginController@regDo');

Route::prefix('index')->group(function(){
	Route::get('/goodsindex','Index\GoodsController@goodsindex');
	Route::get('/goodslists','Index\GoodsController@goodslists');
});

//测试
Route::prefix("/index")->group(function(){
    Route::get('/cart','Cart\CartController@cart');
});
