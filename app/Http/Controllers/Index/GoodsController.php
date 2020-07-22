<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Goods;
use App\Model\Pinglun;
use App\Model\UserModel;
use App\Model\Category;
use App\Model\Shoucang;
class GoodsController extends Controller
{
    //主页
    public function goodsindex(){
        $res=Goods::get();
        return view('index.goods.goodsindex',['res'=>$res]);
    }
    //商品列表
    public function goodsshop(){
        $res=Goods::get();
        $category=Category::get();
        return view('index.goods.goodsshop',['res'=>$res,'category'=>$category]);
    }
    //商品详情
    public function goodslists($id){
        session(['id'=>4]);
        $user_id=session('id');
        $res=Goods::find($id);
        $where=[
            ['id','=',$user_id],
            ['goods_id','=',$id]
        ];
        $shoucang=Shoucang::where($where)->first();
        $pinglun=Pinglun::where('goods_id',$id)->leftjoin('users','pinglun.id','=','users.id')->get();
        return view('index.goods.goodslists',['res'=>$res,'pinglun'=>$pinglun,'shoucang'=>$shoucang]);
    }
    //评论
    public function pinglun(){
        $content=request()->content;
        $goods_id=request()->goods_id;
        session(['id'=>4]);
        $id=session('id');
        $data=[
            'p_content'=>$content,
            'goods_id'=>$goods_id,
            'id'=>$id,
            'p_time'=>time()
        ];
        $res=Pinglun::insert($data);
        if($res){
            echo "ok";
        }else{
            echo "no";
        }
    }
    //收藏变为未收藏
    public function shoucang(){
        $s_id=request()->shoucang;
        $where=[
            ['s_id','=',$s_id]
        ];
        $res=Shoucang::where($where)->first();
        $shoucang=Shoucang::where($where)->update(['is_shoucang'=>2]);
        if($shoucang){
            echo "ok";
        }
    }
    //未收藏变为收藏
    public function shoucang2(){
        $s_id=request()->shoucang;
        $where=[
            ['s_id','=',$s_id]
        ];
        $res=Shoucang::where($where)->first();
        $shoucang=Shoucang::where($where)->update(['is_shoucang'=>1]);
        if($shoucang){
            echo "ok";
        }
    }
    //加入购物车
    public function addCart(){
        $goods_id=request()->goods_id;
        $buy_number=request()->buy_number;
        
    }
}
