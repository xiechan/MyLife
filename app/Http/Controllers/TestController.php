<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function  test(){
        $url = "https://api.weibo.com/oauth2/access_token";
        $curl_post = array(
            'client_id' => '1002574916',
            'client_secret' => '8e1218f10c6f6be39fe8ad83703873fb',
            'grant_type' => 'authorization_code',
            'code' => '6b9f70237ca182027ea36e35741b292c',
            'redirect_uri' => 'www.vivianlife.cn/weiboapi',
        );
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $curl_post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $ticket = curl_exec($ch);
        curl_close($ch);  //获取ticket
        print_r($ticket);exit();
    }
}

