<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//引入guzzle类
use GuzzleHttp\Client;

class TestController extends Controller
{
    //获取access_token方法
    public function getwxtoken(){
        $appid="wx84608dbe9fc7ce6a";    
        $appsecret="02bd693317b6c06ef601226ea9c9d713";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
        $cent=file_get_contents($url);
        echo $cent;
    }
    //使用curl获取access_token
    public function getCurlToken(){
        $appid="wx84608dbe9fc7ce6a";    
        $appsecret="02bd693317b6c06ef601226ea9c9d713";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
         // 创建一个新cURL资源
         $ch = curl_init();
         // 设置URL和相应的选项
         curl_setopt($ch, CURLOPT_URL,$url);
         curl_setopt($ch, CURLOPT_HEADER, 0);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
         // 抓取URL并把它传递给浏览器
         $result=curl_exec($ch);
         // 关闭cURL资源，并且释放系统资源
         curl_close($ch);
         //打印 输出
         echo $result;
    }
    //使用Guzzle获取access_token
    public function getGuzzleToken(){
        $appid="wx84608dbe9fc7ce6a";    
        $appsecret="02bd693317b6c06ef601226ea9c9d713";
        $url="https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=".$appid."&secret=".$appsecret;
         //实例化guzzle
         $client = new Client();
         //发送请求
         $response = $client->request('GET',$url);
         //获取响应的主体部分
         $body = $response->getBody();
         //打印 输出
         echo $body;
    }
}
