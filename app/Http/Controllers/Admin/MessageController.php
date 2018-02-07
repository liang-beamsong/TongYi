<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class MessageController extends Controller
{
    // 留言列表
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

    //留言删除
    public function getDele(Request $request)
    {
    	$id = $request->only(['id']);
        $res = DB::table('ty_message')->where('id',$id)->delete();
        if($res){
            echo json_encode(["status"=>200,"info"=>"删除成功!"]);
        }else{
            echo json_encode(["status"=>502,"info"=>"删除失败!"]);
        }
    }

    //报名列表
    public function getSiglist(Request $request)
    {
        $data=DB::table('ty_signup')->where(function($quest)use($request){
            $keyword=$request->input('name');
             if($keyword){
                 $quest->where('name','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',10));
        $num = 1;
        return view('admin.signup',['signup'=>$data,'num'=>$num,'request' => $request]);
    }

    // 报名删除
    public function getDelete(Request $request)
    {
        $id = $request->only('id');
        $res = DB::table('ty_signup')->where('id',$id)->delete();
        if($res){
            return redirect('/message/siglist')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }
}
