<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    //聊天室
    public function index()
    {
        return view('chat.index');
    }
}
