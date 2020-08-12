<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Model\Admins;
use App\Model\Xw;
class KsController extends Controller
{
    //登录视图
    public function login(){
        return view("ks.login");
    }
    //登录执行
    public function loginDo(){
        $data=request()->except("_token");
        if(substr_count($data['name'],'@')){
            $reg="/^[a-zA-Z0-9]{4,}@[a-zA-Z0-9]{2,6}\.\w{2,4}$/";
            if(!preg_match($reg,$data['name'])){
                return redirect('ks/login')->with("email","邮箱错误");
            }
        }else{
            $regs="/^\d{11}$/";
            if(!preg_match($regs,$data['name'])){
                return redirect('ks/login')->with("tel","手机号错误");
            }
        }
        if(empty($data['pwd'])){
            return redirect('ks/login')->with("msg","密码不能为空");
        }
        $regss="/^\d{6}$/";
        if(!preg_match($regss,$data['pwd'])){
            return redirect('ks/login')->with("msgs","密码必须为六位数字");
        }
        $where=[
            ["name","=",$data['name']]
        ];
        $res=Admins::where($where)->first();
        if(empty($res)){
            return redirect('ks/login')->with("res","账号未查询到");
        }else{
            if($res['pwd']!=$data['pwd']){
                return redirect('ks/login')->with("pwds","密码错误");die;
            }
            session(['userInfo'=>$res]);
            return redirect('ks/index');
        }
        
    }
    //注册视图
    public function reg(){
        return view('ks.reg');
    }
    //注册执行
    public function regDo(){
        $data=request()->except("_token");
        if(substr_count($data['name'],'@')){
            $reg="/^[a-zA-Z0-9]{4,}@[a-zA-Z0-9]{2,6}\.\w{2,4}$/";
            if(!preg_match($reg,$data['name'])){
                return redirect('ks/reg')->with("email","邮箱错误");
            }
        }else{
            $regs="/^\d{11}$/";
            if(!preg_match($regs,$data['name'])){
                return redirect('ks/reg')->with("tel","手机号错误");
            }
        }
        if(empty($data['pwd'])){
            return redirect('ks/reg')->with("msg","密码不能为空");
        }
        $regss="/^\d{6}$/";
        if(!preg_match($regss,$data['pwd'])){
            return redirect('ks/reg')->with("msgs","密码必须为六位数字");
        }
        $res=Admins::insert($data);
        if($res){
            return redirect('ks/login');
        }
    }
    //主页
    public function index(){
        $res=Xw::leftjoin("admins","xw.id","=","admins.id")->get();
        if(!substr_count($data['name'],'@'){
            $aa=str_replace(4.4,"****",$res['name']);
            dd($aa);
        }
        
        return view('ks.index',['res'=>$res]);
    }
    //新闻添加
    public function create(){
        return view('ks.create');
    }
    //新闻添加执行
    public function store(){
        $biaoti=request()->biaoti;
        $time=request()->time;
        $desc=request()->desc;
        $user=session('userInfo');
        $user_id=$user['id'];
        $data=[
            'biaoti'=>$biaoti,
            'time'=>$time,
            'desc'=>$desc,
            'id'=>$user_id
        ];
         $res=Xw::insert($data);
        if($res){
            echo "ok";
        }else{
            echo "no";
        }
    }
    //新闻添加执行
    public function stores(){
        $biaoti=request()->biaoti;
        $desc=request()->desc;
        $user=session('userInfo');
        $user_id=$user['id'];
        $time=date("Y-m-d H:i:s",time());
        $data=[
            'biaoti'=>$biaoti,
            'time'=>$time,
            'desc'=>$desc,
            'id'=>$user_id
        ];
        $res=Xw::insert($data);
        if($res){
            echo "ok";
        }else{
            echo "no";
        }
    }
}
