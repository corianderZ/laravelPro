<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UtestController extends Controller
{
    public function fn()
    {
        $data = [
            ['name'=>'Tom','age'=>'23'],
            ['name'=>'Mary','age'=>'20'],
            ['name'=>'Alice','age'=>'18']
        ];

        $r = 100;

        return view('test.test',['data'=>$data,'r'=>$r]);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')){
            return view('test.user');
        }elseif ($request->isMethod('post')) {
            dd($request->all());
        }else {
            return '请求失败';
        }
    }
}
