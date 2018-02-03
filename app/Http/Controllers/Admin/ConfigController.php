<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ConfigController extends Controller
{
    /**
     * 公司简介遍历
     * admin
     */
    public function getCompany()
    {
    	$data = DB::table('ty_config')->where('id',1)->first();
    	return view('admin.company',['compant'=>$data]);
    }
    /**
     * 公司简介修改
     * admin
     */
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

    /**
     *首页配置
     * admin
     */
    public function getHome()
    {
        $data = DB::table('ty_config')->where('id',2)->first();
        return view('admin.config.home',['hconfig'=>$data]);
    }

    public function postSeotiong(Request $request)
    {
        $data = $request->only(['title','keyword','describe']);
        $res = DB::table('ty_config')->where('id',2)->update($data);
        if($res){
            return redirect('/config/home')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }
    /**
     * logo上传
     * admin
     */
    public function postLogo()
    {
        dd();
    }

    public function getCarousel(Request $request)
    {
        $data = DB::table('ty_carousel')->get();
        return view('admin.config.carousel',['carousel'=>$data]);
    }

    public function postCarousel(Request $request)
    {
       $data = $request->except('_token');

        if($request->hasFile('path')){
            $data['path']=$this->upload($request);
        }
        $res = DB::table('ty_carousel')->where('id',$data['id'])->update($data);
        if($res){
            return redirect('/config/carousel')->with('info','成功');
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
            $dir='/images/carousel';
            $request->file('path')->move($dir,$fileName.'.'.$suffix);
            //拼接路径
            $data['path']=trim($dir.'/'.$fileName.'.'.$suffix,'.');
            return $data['path'];
        }
        return null;
    }
}
