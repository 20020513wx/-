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


//前台用户
Route::prefix("index")->group(function (){
   //登录
    Route::get('/login','Index\LoginController@login');
    //注册
   Route::get('/reg','Index\LoginController@reg');
});
//购物车
Route::prefix("/index")->group(function(){
    Route::get('/cart','Index\CartController@cart');
});

//个人中心
Route::prefix("/index")->group(function (){
   //我的订单
    Route::get("/order","Index\MyorderController@order");
   //我的评论
    Route::get("/desc/{goods_id}","Index\MyorderController@desc");
    //我的收藏
    Route::get("/collect/{goods_id}","Index\MyorderController@collect");
});



//后台
//后台管理员
Route::prefix("/admin")->group(function (){
    Route::get("/reg","Admin\LoginController@reg");   //注册
    Route::post("/regdo","Admin\LoginController@regdo");   //注册执行
    Route::get("/login","Admin\LoginController@login");     //登录
    Route::post("/logindo","Admin\LoginController@logindo");   // 登录执行
});

//后台商品列表
Route::prefix("/admin")->middleware("islogin")->group(function(){
    //商品列表
    Route::get('/goodsindex','Admin\GoodsController@index');
    Route::get('/goodscreate','Admin\GoodsController@create');
    Route::post('/goodsstore','Admin\GoodsController@store');
    Route::get('/goodsdelete/{id}','Admin\GoodsController@delete');
    Route::get('/goodsedit/{id}','Admin\GoodsController@edit');
    Route::post('/goodsupdate/{id}','Admin\GoodsController@update');
});
//后台商品分类
Route::prefix("/admin")->middleware("islogin")->group(function(){
   Route::get('/category_index','Admin\CategoryController@index');   //展示
   Route::get('/category_create','Admin\CategoryController@create');   //试图
    Route::post('/category_store','Admin\CategoryController@store');   //试图
    Route::get('/category_destory/{id}','Admin\CategoryController@destroy');//删除
    Route::get('/category_edit/{id}','Admin\CategoryController@edit');//修改视图
    Route::post('/category_update/{id}','Admin\CategoryController@update');//修改视图
});
//后台用户
Route::prefix("/admin")->group(function(){
    Route::get('/userindex','Admin\UserController@userindex');//用户展示
    Route::get('delete/{id}','Admin\UserController@delete');//删除
    Route::get('edit/{id}','Admin\UserController@edit');//编辑展示
    Route::post('update/{id}','Admin\UserController@update');//编辑执行
});



