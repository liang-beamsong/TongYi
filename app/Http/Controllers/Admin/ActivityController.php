<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ActivityController extends Controller
{
    public function getAdd()
    {
    	return view('admin.activity.add');
    }

    public function getList(Request $request)
    {
        $data=DB::table('ty_activity')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',10));
        $num = 1;
    	return view('admin.activity.list',['activity' => $data,'num'=>$num,'request' => $request]);
    }

    public function getEdit(Request $request)
    {
        $data=DB::table('ty_nav')->get();
        $id = $request->only(['id']);
        $res = DB::table('ty_activity')->where('id',$id)->first();
    	return view('admin.activity.edit',['nav'=>$data,'activity' => $res]);
    }

    public function postInsert(Request $request)
    {
        $data = $request->except(['_token']);
        $data['time'] = time();
        if($request->hasFile('path')){
            $data['path']=$this->upload($request);
        }
        $res = DB::table('ty_activity')->insert($data);
        if($res){
            return redirect('/activity/list')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

    public function postUpdate(Request $request)
    {
        $id = $request->only(['id']);
        $OriginalPath = $request->only(['OriginalPath']);
        $data = $request->except(['_token','OriginalPath']);
        if($request->hasFile('path')){
            @unlink('.'.$OriginalPath['OriginalPath']);
            $data['path']=$this->upload($request);
        }
        $data['time'] = time();
        $res = DB::table('ty_activity')->where('id',$id)->update($data);
        if($res){
            return redirect('/activity/list')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

    public function getDele(Request $request)
    {
        $id = $request->only(['id']);
        $path = DB::table('ty_activity')->where('id',$id)->first();
        @unlink('.'.$path->path);
        $res = DB::table('ty_activity')->where('id',$id)->delete();
        if($res){
            return redirect('/activity/list')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

    public function upload($request)
    {
        if($request->hasFile('path')){
            //拼接文件名称
            $fileName=time().rand(1000000,9999999);
            //获取文件的后缀名
            $suffix=$request->file('path')->getClientOriginalExtension();
            //文件夹的规则
            $dir='./images/activity';
            $request->file('path')->move($dir,$fileName.'.'.$suffix);
            //拼接路径
            $data['path']=trim($dir.'/'.$fileName.'.'.$suffix,'.');
            return $data['path'];
        }
        return null;
    }
}
