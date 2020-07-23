<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\Myorder;
use App\Model\UserModel;
use App\Model\Shouceng;
class MyorderController extends Controller
{
//    我的订单
    public function order(){

    }

    //我的评论
    public function desc(){

        session(["id"=>5]);
        $user_id=session("id");
        $where=[
            ['id',"=",$user_id]
        ];
        $date=Myorder::where($where)->get();
        return view("index.order.desc",["data"=>$date]);

    }

    //我的收藏
    public function collect(){

        $user_id=session("id");
        $where=[
          ["id","=",$user_id],
            ["is_shoucang","=",1]
        ];
        $goods=Shouceng::where($where)->get();
        return view("index.order.collect",["goods"=>$goods]);
    }
}
