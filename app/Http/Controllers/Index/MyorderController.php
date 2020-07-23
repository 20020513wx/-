<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\Myorder;
use App\Model\UserModel;
class MyorderController extends Controller
{
//    我的订单
    public function order(){

    }

    //我的评论
    public function desc($goods_id){
        $res=Order::find($goods_id);
        session(["id"=>5]);
        $user_id=session("id");
        $where=[
            ['id',"=",$user_id]
        ];
        $date=Myorder::where($where)->get();
        return view("index.order.desc",['res'=>$res,"data"=>$date]);

    }

    //我的收藏
    public function collect($goods_id){
        $res=Order::find($goods_id);
        return view("index.order.collect",['res'=>$res]);
    }
}
