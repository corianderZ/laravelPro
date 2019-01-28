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
// Route::get('/test',function(){
// 	return '这是基本路由';
// });
// Route::get('testP/{name}',function($username){
// 	return "这是带必选参数路由，名字为$username";
// });
// Route::get('testOP/{name?}',function($username=''){
// 	return "这是带可选参数的路由，名字为$username";
// });
// Route::get('testRule/{userid}',function($id=''){
// 	return "这里是带参数的正则约束...$id";
// })->where('userid','\d+');
// Route::get('testRules/{name}/{age}',function($n,$a){
// 	return "这是多参数的正则约束";
// })->where(['name'=>'\w+','age'=>'\d+']);
// Route::get('/test/fn','TestController@test');
// Route::get('/utest/fn','Test\UtestController@fn');
// //中间件
// Route::get('/login',function(){
// 	session(['uid'=>23]);
// 	return "这里是登录页面";
// });
// Route::get('/setting',function(){
// 	return "这里是setting路由，uid=".session('uid');
// })->middleware('login');
Route::match(['get','post'],'/user/add','test\UtestController@add');
//设置响应头
// Route::get('/response',function(){
// 	return response('Test',200)->header('Content-Type','text/html,charset=utf-8');
// });
//设置Cookie
// Route::get('/setCookie',function(){
// 	return response('')->withCookie('name','Tom');
// });
// Route::get('/getCookie',function(){
// 	dd(Cookie::get('name'));
// });
//ajax响应
// Route::get('/resAjax',function(){
// 	return view('test.user');
// });
// Route::get('/setValues',function(){
// 	return response()->json(['name'=>'Tom','age'=>12]);
// });
//数据库
// Route::get('/getdb',function(){
// 	$res = DB::table('laravel_user');
// 	dd($res);
// });
// Route::get('/insert',function(){
// 	$info = DB::table('user')->insert(['name'=>'zahngsan','password'=>'123456']);
// 	dd($info);
// });
// Route::get('/get',function(){
// 	$data = DB::table('user')->get();
// 	dd($data);
// });
// Route::get('/first',function(){
// 	$info = DB::table('user')->where('id','=',2)->first();
// 	dd($info);
// });
// Route::get('/update',function(){
// 	$res = DB::table('user')->where('id','=',2)->update(['name'=>'lisi']);
// 	dd($res);
// });
// Route::get('/insertgetid',function(){
// 	$info = DB::table('user')->insertGetId(['name'=>'wangwu','password'=>'123456']);
// 	dd($info);
// });
Route::get('/show','Test\UserController@show');
Route::match(['get','post'],'/add','Test\UserController@add');
Route::match(['get','post'],'/edit/{id}','Test\UserController@edit')->where('id','\d+');
Route::get('/del/{id}','Test\UserController@delete')->where('id','\d+');
//前台路由

//前台首页
Route::get('/','Home\IndexController@index');

//分类页面
Route::get('/types/{id}','Home\TypesController@index');

// 后台路由

//登录页面
Route::get('admin/login','Admin\LoginController@index');

//Route::get('admin/login','Admin\LoginController@Code');

/*
	@param1 namespace=>'Admin' 控制器所在文件目录名

	@param2 prefix=>'admin' 路由名字的相同部分

	@param3 middleware=>'adminLogin' 引入中间件 (记得在Kernel.php文件中注册中间件)

	@ps php artisan make:middleware 中间件名   新建中间件
*/
Route::group(['namespace'=>'Admin','prefix'=>'admin','middleware'=>'adminLogin'],function(){
	//后台首页路由
	Route::get('/','IndexController@index');
	//后台管理员管理
	Route::resource('admin','AdminController');
	//后台用户管理
	Route::resource('user','UserController');
});