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

Route::prefix('index')->group(function(){
	Route::get('/goodsindex','Index\GoodsController@goodsindex');
	Route::get('/goodslists','Index\GoodsController@goodslists');
});

Route::prefix("index")->group(function (){
   Route::get('/login','Index\LoginController@login');

   Route::get('/reg','Index\LoginController@reg');
});


//购物车
Route::prefix("/index")->group(function(){
    Route::get('index/cart','Index\CartController@cart');
});
//个人中心

Route::prefix("/myord")->group(function(){
    Route::get("/index","Myord\MyordController@index");
});

