<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class CourseController extends Controller
{
    public function index(Request $request)
    {
    	$course=DB::table('ty_article')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',9));
    	return view('home.course',['course'=>$course,'request'=>$request]);
    }
}
