<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

//引入Controller类
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //加载后台首页
    public function index()
    {
    	return view("admin.index");
    }
}
