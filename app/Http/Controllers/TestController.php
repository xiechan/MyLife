<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TestController extends Controller
{
    //
    public function  test(){
        $regex = '/^http:\/\/([\w.]+)\/([\w]+)\/([\w]+)\.html$/i';
        $str = 'http://www.youku.com/show_page/id_ABCDEFG.html';
        $matches = array();
        if(preg_match($regex, $str, $matches)){
            var_dump($matches);
        }
        echo "\n";
    }
}

