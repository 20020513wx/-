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
//后台管理员
Route::prefix("/admin")->group(function (){
    Route::get("/reg","Admin\UserController@reg");   //注册
    Route::post("/regdo","Admin\UserController@regdo");   //注册执行
    Route::get("/login","Admin\UserController@login");     //登录
    Route::post("/logindo","Admin\UserController@logindo");   // 登录执行
});
//购物车
Route::prefix("/index")->group(function(){
    Route::get('/index/cart','Index\CartController@cart');
});
//个人中心
Route::prefix("/myord")->middleware("islogin")->group(function(){
    Route::get("/index","Myord\MyordController@index");
});