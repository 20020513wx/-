<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GoodsController extends Controller
{
    //商品列表
    public function goodsindex(){
    	return view('index.goods.goodsindex');
    }
    //商品列表
    public function goodslists(){
    	return view('index.goods.goodslists');
    }
}
