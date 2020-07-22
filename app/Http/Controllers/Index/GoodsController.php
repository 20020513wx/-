<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Goods;
class GoodsController extends Controller
{
    //商品列表
    public function goodsindex(){
        $res=Goods::get();
        return view('index.goods.goodsindex',['res'=>$res]);
    }
}
