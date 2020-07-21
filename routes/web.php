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
//前台
Route::prefix('index')->group(function(){
	Route::get('/goodsindex','Index\GoodsController@goodsindex');
	Route::get('/goodslists','Index\GoodsController@goodslists');
});

//购物车
Route::prefix("/index")->group(function(){
    Route::get('index/cart','Index\CartController@cart');
});


//后台用户
Route::prefix("/admin")->group(function(){
    Route::get('/userindex','Admin\UserController@userindex');//用户展示
    Route::get('delete/{id}','Admin\UserController@delete');//删除
    Route::get('edit/{id}','Admin\UserController@edit');//编辑展示
    Route::post('update/{id}','Admin\UserController@update');//编辑执行
});


