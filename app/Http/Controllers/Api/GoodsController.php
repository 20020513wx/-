<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\GoodsModel;
class GoodsController extends Controller
{
    public function home(){
    	$list = GoodsModel::select("goods_id","goods_name","goods_img","shop_price",)->orderBy("goods_id","desc")->limit(6)->get();
       	$response = [
            'errno' => 0,
            'msg'   => '成功',
            'data'  => [
                'list'  => $list
            ]
        ];
        return $response;
    }
}
