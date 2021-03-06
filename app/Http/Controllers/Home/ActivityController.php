<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ActivityController extends Controller
{
    public function index(Request $request)
    {
    	$activity=DB::table('ty_activity')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',9));
    	return view('home.activity',['activity'=>$activity,'request'=>$request]);
    }
}
