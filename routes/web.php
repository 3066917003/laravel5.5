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


//定义三个路由  首页 关于 帮助

Route::get('/index','HomeController@index');
Route::get('about','HomeController@about');

//添加学生
Route::get('/student/add','StudentController@add')->name('student.add');
Route::post('/student/save','StudentController@save');
//学生列表
Route::get('/student/list','StudentController@index')->name('student.index');

//测试
Route::get('/test','BookController@test');
//添加用户
Route::get('/user/add','Day2\AdminController@add')->name('user.add');
//保存用户
Route::post('/user/save','Day2\AdminController@save')->name('user.save');
//测试弹出警告框
Route::get('/user/test','Day2\AdminController@test')->name('user.test');
//分页路由
Route::get('/user/list','Day2\AdminController@list')->name('user.list');
//修改用户
Route::get('/user/edit/{admin}','Day2\AdminController@edit')->name('user.edit');
//回显
Route::post('/user/update/{admin}','Day2\AdminController@update')->name('user.update');

//删除
Route::get('/user/delete/{admin}','Day2\AdminController@delete')->name('user.delete');
//数据表操作
route::get('/db','Day2\DbController@index');

//资源路由（文章）
Route::resource('articles','Day3\ArticleController');

//添加
Route::get('articles/create','Day3\ArticleController@create')->name('articles.create');
//保存
Route::post('articles','Day3\ArticleController@store')->name('articles.store');
//修改
Route::get('articles/{article}/edit','Day3\ArticleController@edit')->name('articles.edit');
//保存修改后的数据
Route::put('articles/{article}','Day3\ArticleController@update')->name('articles.update');
//获取所有文章
Route::get('articles','Day3\ArticleController@index')->name('articles.index');
//查看一篇文章
Route::get('articles/{article}','Day3\ArticleController@show')->name('articles.show');
//删除文章
Route::delete('articles/{article}','Day3\ArticleController@destroy')->name('articles.destroy');

//session
Route::get('session','Day3\Day3Controller@session');
//响应
Route::get('response','Day3\Day3Controller@response');
//路由也能响应
/*Route::get('response',function (){
    return 'hello world';
});*/

//注册用户
Route::get('user/register','Day4\UserController@create');
Route::get('user/index','Day4\UserController@index')->name('user.index');
//用户登录
Route::get('login','Day4\SessionController@create')->name('login');
Route::post('login','Day4\SessionController@store')->name('login');


