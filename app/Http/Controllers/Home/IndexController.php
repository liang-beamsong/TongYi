<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class IndexController extends Controller
{
    public function index()
    {
    	$num = 0;
        $number = 0;
    	//轮播图
    	$carousel = DB::table('ty_carousel')->get();
    	//课程
    	$curriculum = DB::table('ty_article')->orderBy('id','desc')->limit(2)->get();
    	//活动
    	$activity = DB::table('ty_activity')->orderBy('id','desc')->limit(8)->get();
    	//动态
    	$dynamic = DB::table('ty_dynamic')->orderBy('id','desc')->limit(20)->get();
        //优势
        $advantage = DB::table('ty_advantage')->orderBy('id','desc')->limit(6)->get();
        //伙伴
        $partner = DB::table('ty_partner')->get();
    	return view('home.index',['carousel'=>$carousel,
    		'curriculum'=>$curriculum,
    		'activity'=>$activity,
    		'dynamic'=>$dynamic,
    		'num'=>$num,
            'number'=>$number,
            'advantage'=>$advantage,
            'partner'=>$partner,
    		]);
    }
}
