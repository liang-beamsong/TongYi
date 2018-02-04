<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ConfigController extends Controller
{
    /**
     * 合作加盟遍历
     * admin
     */
    public function getJoin()
    {
    	$data = DB::table('ty_company')->where('id',2)->first();
    	return view('admin.cominfo.join',['compant'=>$data]);
    }
    /**
     * 合作加盟修改
     * admin
     */
    public function postJoin(Request $request)
    {
    	$result = $request->except(['_token']);
    	$data = DB::table('ty_company')->where('id',2)->update($result);
    	if($data){
            return redirect('/company/join')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

     /**
     * 联系我们
     * admin
     */
    public function getContact()
    {
        $data = DB::table('ty_company')->where('id',1)->first();
        return view('admin.cominfo.company',['compant'=>$data]);
    }
    /**
     * 联系我们修改
     * admin
     */
    public function postContact(Request $request)
    {
        $result = $request->except(['_token']);
        $data = DB::table('ty_company')->where('id',1)->update($result);
        if($data){
            return redirect('/company/contact')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

     /**
     * 团队信息
     * admin
     */
    public function getTeam()
    {
        $data = DB::table('ty_company')->where('id',3)->first();
        return view('admin.cominfo.team',['compant'=>$data]);
    }
    /**
     * 团队信息修改
     * admin
     */
    public function postTeam(Request $request)
    {
        $result = $request->except(['_token']);
        $data = DB::table('ty_company')->where('id',3)->update($result);
        if($data){
            return redirect('/company/team')->with('info','成功');
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
        $data = DB::table('ty_config')->where('id',1)->first();
        return view('admin.config.home',['hconfig'=>$data]);
    }

    public function postSeotiong(Request $request)
    {
        $data = $request->only(['title','keyword','describe']);
        $res = DB::table('ty_config')->where('id',1)->update($data);
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
    public function postLogo(Request $request)
    {
        $OriginalPath = $request->only('OriginalPath');
        if($request->hasFile('path')){
            //拼接文件名称
            $fileName=time().rand(1000000,9999999);
            //获取文件的后缀名
            $suffix=$request->file('path')->getClientOriginalExtension();
            //文件夹的规则
            $dir='./images/logo';
            $request->file('path')->move($dir,$fileName.'.'.$suffix);
            //拼接路径
            $data['path']=trim($dir.'/'.$fileName.'.'.$suffix,'.');
        }

        @unlink('.'.$OriginalPath['OriginalPath']);
        $res = DB::table('ty_config')->where('id',1)->update($data);
        if($res){
            return redirect('/config/home')->with('info','成功');
        }else{
             return back()->with('info','失败');
        }
    }

    public function getCarousel(Request $request)
    {
        $data = DB::table('ty_carousel')->get();
        return view('admin.config.carousel',['carousel'=>$data]);
    }

    public function postCarousel(Request $request)
    {
        $OriginalPath = $request->only('OriginalPath');
        $data = $request->only(['path','url']);

        if($request->hasFile('path')){
            $data['path']=$this->upload($request);
        }
        dd($data);
        if(!$data['url']){
            $data['url'] = $request->only(['yurl']);
        }
        @unlink('.'.$OriginalPath['OriginalPath']);
        $res = DB::table('ty_carousel')->where('id',$request->input('id'))->update($data);
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
            $dir='./images/carousel';
            $request->file('path')->move($dir,$fileName.'.'.$suffix);
            //拼接路径
            $data['path']=trim($dir.'/'.$fileName.'.'.$suffix,'.');
            return $data['path'];
        }
        return null;
    }
}
