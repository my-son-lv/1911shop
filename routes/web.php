<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::any('/wx/token','TestController@getwxtoken'); //微信access_token 路由
Route::get('/wx/curltoken','TestController@getCurlToken');  //curl获取access_token路由
Route::get('/wx/gtoken','TestController@getGuzzleToken');  //使用Guzzle获取access_token