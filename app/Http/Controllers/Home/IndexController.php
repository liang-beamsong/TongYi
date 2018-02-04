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
    	//轮播图
    	$carousel = DB::table('ty_carousel')->get();

    	//倒叙取两条课程
    	$curriculum = DB::table('ty_article')->orderBy('id','desc')->limit(2)->get();
    	return view('home.index',['carousel'=>$carousel,'curriculum'=>$curriculum]);
    }
}
