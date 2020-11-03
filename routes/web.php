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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::any('/phone','Admin\AdminController@phone');
Route::any('/','Admin\AdminController@index');
//课程介绍
Route::any('/courses','Admin\AdminController@courses');
//服务支持
Route::any('/service','Admin\AdminController@service');
//合作加盟
Route::any('/cooperation','Admin\AdminController@cooperation');
//关于我们
//Route::any('/about','Admin\AdminController@about');
//资讯中心
Route::any('/information','Admin\AdminController@information');
//资讯添加页面
Route::any('/hswdedunews','Admin\AdminController@news');
//资讯添加
Route::any('/newsadd','Admin\AdminController@newsadd');
//小问
Route::any('/xwding','Admin\AdminController@xwding');
//双师
Route::any('/ss','Admin\AdminController@ss');
//KMS
Route::any('/kms','Admin\AdminController@kms');
//图片上传
Route::any('/uploadimg','Admin\AdminController@uploadimg');
//资讯详情
Route::any('/newsparticulars','Admin\AdminController@newsparticulars');



// Route::any('/admin','Admin\AdminController@admin');
// Route::any('/login','Admin\AdminController@login');
// Route::any('/loginadd','Admin\AdminController@loginadd');
// Route::any('/sessiondel','Admin\AdminController@sessiondel');



// <div style="width:300px;background-color:#f5f5f5;float:left;">
// 			<img src="/hsimg/zx2.jpg" width="100%">
// 			<font style="font-size:17px;">翰师问鼎教育：手把手教你做好开学期英语课程招生</font>
// 		</div>
