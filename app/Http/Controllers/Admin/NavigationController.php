<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class NavigationController extends Controller
{
    public function getAdd()
    {
    	return view('admin.nav.add');
    }

    public function getList()
    {
    	$data=DB::table('ty_nav')->get();
    	return view('admin.nav.list',['nav' => $data]);
    }

    public function getEdit(Request $request)
    {
    	$id = $request->only(['id']);
    	$data=DB::table('ty_nav')->where('id',$id)->first();
    	return view('admin.nav.edit',['nav' => $data]);
    }

    public function postUpdate(Request $request)
    {
    	$data = $request->only(['name','url']);
    	$id = $request->only(['id']);
    	$res= DB::table('ty_nav')->where('id',$id)->update(['name'=>$data['name'],'url'=>$data['url']]);
    	if($res){
    		return redirect('/nav/list')->with('info','成功');
    	}else{
    		 return back()->with('info','修改失败');
    	}
    }
}
