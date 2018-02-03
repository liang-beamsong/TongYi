<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class LinksController extends Controller
{
    public function getAdd()
    {
    	return view('admin.links.add');
    }

    public function getEdit(Request $request)
    {
        return view('admin.links.edit');
    }

    public function getDele(Request $request)
    {
        $id = $request->input('id');
        $res = DB::table('ty_links')->where('id',$id)->delete();
        if($res){
            return redirect('/links/list')->with('info','成功');
        }else{
             return back()->with('info','修改失败');
        }
    }

    public function getList(Request $request)
    {
        $data=DB::table('ty_links')->where(function($quest)use($request){
            $keyword=$request->input('name');
             if($keyword){
                 $quest->where('name','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',10));
        $num = 1;
        return view('admin.links.list',['links' => $data,'request'=>$request,'num' => $num]);
    }

    public function postInsert(Request $request)
    {
        $data = $request->only(['name','url']);
        $res = DB::table('ty_links')->insert($data);
        if($res){
            return redirect('/links/list')->with('info','成功');
        }else{
             return back()->with('info','修改失败');
        }
    }
}
