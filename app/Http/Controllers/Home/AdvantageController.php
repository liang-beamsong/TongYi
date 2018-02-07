<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class AdvantageController extends Controller
{
    public function index(Request $request)
    {
    	$advantage=DB::table('ty_advantage')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',9));
    	return view('home.advantage',['advantage'=>$advantage,'request'=>$request]);
    }
}
