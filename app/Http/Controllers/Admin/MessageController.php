<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class MessageController extends Controller
{
    public function getList(Request $request)
    {
    	$data=DB::table('ty_message')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',10));
    	$num = 1;
    	return view('admin.message',['message'=>$data,'num'=>$num,'request' => $request]);
    }

    public function getDele(Request $request)
    {
    	$id = $request->only(['id']);
        $res = DB::table('ty_message')->where('id',$id)->delete();
        if($res){
            return redirect('/message/list')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }
}
