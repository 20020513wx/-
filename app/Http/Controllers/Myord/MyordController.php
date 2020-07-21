<?php

namespace App\Http\Controllers\Myord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MyordController extends Controller
{
    //个人中心
    public function index(){
        return view("index.myord.index");
    }
}
