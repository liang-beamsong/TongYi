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
        $nav = DB::table('ty_nav')->where('nid','0')->get();
    	return view('admin.nav.add',['nav'=>$nav]);
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
        $navlist = DB::table('ty_nav')->where('nid','0')->get();
    	return view('admin.nav.edit',['nav' => $data,'navlist'=>$navlist]);
    }

    public function postUpdate(Request $request)
    {
    	$data = $request->only(['name','url','nid']);
    	$id = $request->only(['id']);
    	$res= DB::table('ty_nav')->where('id',$id)->update(['name'=>$data['name'],'url'=>$data['url']]);
    	if($res){
    		return redirect('/nav/list')->with('info','成功');
    	}else{
    		 return back()->with('info','修改失败');
    	}
    }

    public function postInsert(Request $request)
    {
        $data = $request->only(['name','url','nid']);
        $res= DB::table('ty_nav')->insert($data);
        if($res){
            return redirect('/nav/list')->with('info','成功');
        }else{
             return back()->with('info','修改失败');
        }
    }
}
