<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//引入Controller类
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //加载后台首页
    public function index()
    {
    	return view("admin.Admin.index");
    }
    //加载后台添加管理员页面
    public function create()
    {
    	return view("admin.Admin.add");
    }
    //插入操作
    public function store()
    {
    	
    }
    //修改页面
    public function show()
    {
    	return view("admin.Admin.edit");
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
