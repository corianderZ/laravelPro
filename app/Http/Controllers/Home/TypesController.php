<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

//引入Controller类
use App\Http\Controllers\Controller;

class TypesController extends Controller
{
    //加载后台首页
    public function index()
    {
    	return view("home.types");
    }
}
