<?php

namespace App\Http\Middleware;

use Closure;

class adminLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //判断用户是否登录后台
        if(session('laravelUserInfo')){
            //登录
            return $next($request);
        }else{
            return redirect('admin/login');
        }
        
    }
}
