<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Hash;
use Crypt;
use Session;
use Cookie;
class LoginController extends Controller
{
    public function index()
    {
    	if(session('uid')){
    		return redirect('admin');
    	}else{
    		return view('admin.login');
    	}
    }

    /**
     * 后台登录
     */
    public function login(Request $Request)
    {
    	$data=$Request->only(['username','password']);
    	$info=DB::table('ty_user')->where('username',$data['username'])->first();
    	if(empty($info)){
    		exit(json_encode(['status'=>404,'info'=>'管理员不存在请重新输入!']));
    	}
    	// $re=Hash::make(md5($data['password']));
    	// dd($re);
    	if(Hash::check(md5($data['password']), $info->password)){
    		if ($info->status == '2') {

    			exit(json_encode(['status'=>500,'info'=>'您的管理员账号已被冻结!']));

    		}
    		session(['uid'=>$info->id,'username'=>$info->username]);

    		$cookies=Crypt::encrypt(implode(',',$data));
    		setcookie('userinfo',$cookies,time()+3600,'/');

    		exit(json_encode(['status'=>200,'info'=>'成功']));
    	}else{
    		exit(json_encode(['status'=>400,'info'=>'密码错误请重新输入!']));
    	}
    }

    /**
     * 用户退出
     */
    public function logout(Request $request)
    {
        // 清除session
        $request->session()->forget('uid');
        $request->session()->forget('username');

        // 清除cookie
        setcookie('userinfo', '', -1, '/');
        
        return redirect('admin/login');
    }
}
