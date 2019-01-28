<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//引入Controller类
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //加载后台首页
    public function index()
    {
    	//echo "111";
    	return view("admin.User.index");
    }
    //加载后台添加用户页面
    public function create()
    {
    	return view("admin.User.add");
    }
    //插入操作
    public function store()
    {
    	
    }
    //修改页面
    public function show()
    {
    	return view("admin.User.edit");
    }
    //更新操作
    public function update()
    {

    }
    //删除操作
    public function destory()
    {

    }
}
