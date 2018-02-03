<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ArticleController extends Controller
{
    public function getAdd()
    {
        $data=DB::table('ty_nav')->get();
    	return view('admin.article.add',['nav'=>$data]);
    }

    public function getList(Request $request)
    {
        $data=DB::table('ty_article')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',10));
        $num = 1;
    	return view('admin.article.list',['article' => $data,'num'=>$num,'request' => $request]);
    }

    public function getEdit(Request $request)
    {
        $data=DB::table('ty_nav')->get();
        $id = $request->only(['id']);
        $res = DB::table('ty_article')->where('id',$id)->first();
    	return view('admin.article.edit',['nav'=>$data,'article' => $res]);
    }

    public function postInsert(Request $request)
    {
        $data = $request->except(['_token']);
        $data['time'] = time();
        $res = DB::table('ty_article')->insert($data);
        if($res){
            return redirect('/article/list')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

    public function postUpdate(Request $request)
    {
        $id = $request->only(['id']);
        $data = $request->except(['_token']);
        $data['time'] = time();
        $res = DB::table('ty_article')->where('id',$id)->update($data);
        if($res){
            return redirect('/article/list')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

    public function getDele(Request $request)
    {
        $id = $request->only(['id']);
        $res = DB::table('ty_article')->where('id',$id)->delete();
        if($res){
            return redirect('/article/list')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }
}
