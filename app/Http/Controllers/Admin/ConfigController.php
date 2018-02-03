<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ConfigController extends Controller
{
    public function getCompany()
    {
    	$data = DB::table('ty_config')->where('id',1)->first();
    	return view('admin.company',['compant'=>$data]);
    }

    public function postCompany(Request $request)
    {
    	$result = $request->except(['_token']);
    	$data = DB::table('ty_config')->where('id',1)->update($result);
    	if($data){
            return redirect('/company/company')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }
}
