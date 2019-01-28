<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//引入Controller类
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //加载后台首页
    public function index()
    {
    	return view("admin.Login.login");
    }
    public function Code(Request $request)
    {
    	require_once("../resources/code/Vcode.class.php");
    	//构造方法
		$vcode = new Vcode(80, 30, 4);
		//将验证码放到服务器自己的空间保存一份
		$code = $vcode->getcode();
		$request->session()->put('code',$code);
		//将验证码图片输出
		$vcode->outimg();
    }
}
