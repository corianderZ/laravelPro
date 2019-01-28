<?php
namespace App\Http\Controllers;

use \App\Http\Controllers\Controller; //引入空间类元素

class TestController extends Controller
{
    public function test()
    {
        return "Hello World";
    }

}