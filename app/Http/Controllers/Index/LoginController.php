<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登录
    public function login(){
        return view('index.login.login');
    }
    public function lodin_do(){
        $data=request()->except('_token');
        dump($data);die;
    }


    //注册
    public function reg(){
        return view('index.login.reg');
    }
    public function reg_do(){
        $data=request()->except('_token');
        $user_name=$data['user_name'];
        $user_pwd=$data['user_pwd'];
        $user_email=$data['user_email'];
        //var_dump($user_email);die;

        //验证用户名
        if (!preg_match("/^[\u4E00-\u9FA5]{1,6}$/", $data['user_name']) == false ) {
            return ["err_code" => 001, "msg" => "用户名由中文组成,长度1-6位"];
        }
        if($user_name==""){
            return ["err_code" => 001, "msg" => "用户名由中文组成,长度1-6位"];
        }


        //验证用户密码
        if (!preg_match("/^[a-zA-Z0-9]{6,10}$/", $data['user_pwd']) == false ) {
            return ["err_code" => 002, "msg" => "密码长度由6-12位 数字 大写字母 小写字母组成，不能有特殊符号"];
        }
        if($user_name==""){
            return ["err_code" => 002, "msg" => "密码长度由6-12位 数字 大写字母 小写字母组成，不能有特殊符号"];
        }


        //验证用户邮箱
        if (!preg_match("/^([\.a-zA-Z0-9_-])+@([a-zA-Z0-9_-])+(\.[a-zA-Z0-9_-])+/", $data['user_email']) == false ) {
            return ["err_code" => 003, "msg" => "请输入正确的邮箱格式"];
        }
        if($user_name==""){
            return ["err_code" => 003, "msg" => "请输入正确的邮箱格式"];
        }
    }
}
