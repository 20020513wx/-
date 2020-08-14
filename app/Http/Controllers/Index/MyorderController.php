<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Order;
use App\Model\Myorder;
use App\Model\UserModel;
use App\Model\Pinglun;
use App\Model\Shoucang;
use DB;
class MyorderController extends Controller
{
//    我的订单
    public function order(){

    }

    //我的评论
    public function desc(){
        $user_id=session("id");

        $where=[
            ['pinglun.id',"=",$user_id]
        ];
        $data=Pinglun::where($where)
            ->leftJoin('users','pinglun.id','=','users.id')
            ->leftJoin('goods','pinglun.goods_id','=','goods.goods_id')
            ->get();
        return view("index.order.desc",["data"=>$data]);

    }

    //我的收藏
    public function collect(){

        $user_id=session("id");
        $where=[
            "shoucang.id"=>$user_id,
            "is_shoucang"=>1
        ];
        $goods=Shoucang::where($where)->leftJoin('users','shoucang.id','=','users.id')->get();
        return view("index.order.collect",["goods"=>$goods]);
    }
    public function quit(){
        session(['user'=>null]);
        return redirect('/');
    }

    public function pay()
    {
        //订单号

        //价格

        //用户

        //商品id
        $param = [
            'out_trade_no'=> time().mt_rand(11111,99999),
            'product_code'=> 'FAST_INSTANT_TRADE_PAY',
            'total_amount'=> 11.1,
            'subject'=> '商品支付',
        ];
        $pubParam = [
            'app_id'=> 2016101700707309,
            'method'=> 'alipay.trade.page.pay',
            'return_url'=> 'http://www.baidu.com',   //同步通知地址
            'charset'=> 'utf-8',
            'sign_type'=> 'RSA2',
            'timestamp'=> date('Y-m-d H:i:s'),
            'version'=> '1.0',
            'notify_url'=> 'http://www.baidu.com',   // 异步通知
            'biz_content'=> json_encode($param),
        ];

        ksort($pubParam);
        $str = "";
        foreach($pubParam as $k=>$v)
        {
            $str .= $k . '=' . $v . '&';
        }
        $str=rtrim($str,'&');
        $sign=$this->sign($str);

        $url = 'https://openapi.alipaydev.com/gateway.do?'.$str.'&sign='.urlencode($sign);
        return redirect($url);
        header('Location:'.$request_url);
    }

    protected function sign($data)
    {
        $priKey = file_get_contents(storage_path('keys/priv_myali.key'));
        $res = openssl_get_privatekey($priKey);
        ($res) or die('私钥有误');
        openssl_sign($data, $sign, $res, OPENSSL_ALGO_SHA256);
        openssl_free_key($res);
        $sign = base64_encode($sign);
        return $sign;
    }
}
