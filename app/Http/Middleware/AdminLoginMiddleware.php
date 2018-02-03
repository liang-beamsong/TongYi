<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Crypt;

class AdminLoginMiddleware
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

        /**
         * 判断是否存在session 
         */
        if(session('uid')){

            return $next($request);

        }else if(isset($_COOKIE['userinfo'])){ 

            $secret = $_COOKIE['userinfo'];

            $decrypt = Crypt::decrypt($secret);

            $res  =explode(',',$decrypt);

            $info = DB::table('ty_user')->where('username',$res['0'])->first();

            //写入session
            session(['uid'=>$info->id,'username'=>$info->username]);

            return $next($request);
        }else{

            return redirect('/admin/login');
            
        }

    }
      
}
