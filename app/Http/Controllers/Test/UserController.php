<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\test\UserModel;

class UserController extends Controller
{
    public function show()
    {
        $data = UserModel::all();

        return view('orm.list',['data'=>$data]);
    }

    public function add(Request $request)
    {
        if ($request->isMethod('get')){
            return view('orm.add');
        }elseif ($request->isMethod('post')) {
            $user = UserModel::create($request->all());
            if ($user->save()) {
                return redirect('/show');
            }else {
                return redirect('/add');
            }
        }
    }

    public function edit(Request $request,$id)
    {
        if ($request->isMethod('get')) {
            $info = UserModel::find($id);
            
            return view('orm.edit',['info'=>$info]);

        }elseif ($request->isMethod('post')) {
            $name = $request->input('name');
            $password = $request->input('password');
            $row = UserModel::where('id',$id)->update(['name'=>$name,'password'=>$password]);
            if ($row === false) {
                return redirect('/edit'.$id);
            }else {
                return redirect('/show');
            }
        }
    }

    public function delete(Request $request,$id)
    {
        $info = UserModel::find($id)->delete();
        return redirect('/show');
    }
}
