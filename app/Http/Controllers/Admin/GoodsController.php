<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Goods;
use Validator;
class GoodsController extends Controller
{
    //商品展示
    public function index(){
        $res=Goods::get();
        return view('admin.goods.goodsindex',['res'=>$res]);
    }
    //商品添加视图
    public function create(){
        return view('admin.goods.goodscreate');
    }
    //商品添加执行
    public function store(){
        $data=request()->except('_token');
        $validator=Validator::make($data,[
            'goods_name'=>'required|unique:goods',
            'goods_price'=>'required',
            'goods_desc'=>'required',
            'goods_num'=>'required'
        ],[
            'goods_name.required'=>'商品名称不能为空',
            'goods_name.unique'=>'商品名称不能重复',
            'goods_price.required'=>'商品单价不能为空',
            'goods_desc.required'=>'商品描述不能为空',
            'goods_num.required'=>'商品库存不能为空',
        ]);
        if($validator->fails()){
            return redirect('admin/goodscreate')->withErrors($validator)->withInput();
        }
        if(request()->hasFile('goods_img')){
            $data['goods_img']=$this->upload('goods_img');
        }
        $res=Goods::insert($data);
        if($res){
            return redirect('admin/goodsindex');
        }
    }

    //文件上传
    function upload($filename){
        if(request()->file($filename)->isValid()){
            $file=request()->$filename;
            $path=$file->store('uploads');
            return $path;
        }
        exit('文件上传有误');
    }

    //删除
    public function delete($id){
        $res=Goods::destroy($id);
        return redirect('admin/goodsindex');
    }

    //修改
    public function edit($id){
        $res=Goods::find($id);
        return view('admin.goods.goodsedit',['res'=>$res]);
    }

    //修改执行
    public function update($id){
        $data=request()->except('_token');
        $validator=Validator::make($data,[
            'goods_name'=>'required|unique:goods',
            'goods_price'=>'required',
            'goods_desc'=>'required',
            'goods_num'=>'required'
        ],[
            'goods_name.required'=>'商品名称不能为空',
            'goods_name.unique'=>'商品名称不能重复',
            'goods_price.required'=>'商品单价不能为空',
            'goods_desc.required'=>'商品描述不能为空',
            'goods_num.required'=>'商品库存不能为空',
        ]);
        if($validator->fails()){
            return redirect('admin/goodscreate')->withErrors($validator)->withInput();
        }
        if(request()->hasFile('goods_img')){
            $data['goods_img']=$this->upload('goods_img');
        }
        $where=[
            ['goods_id','=',$id]
        ];
        $res=Goods::where($where)->update($data);
        if($res){
            return redirect('admin/goodsindex');
        }
    }

}
