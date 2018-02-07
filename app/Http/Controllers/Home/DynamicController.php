<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class DynamicController extends Controller
{
    public function index(Request $request)
    {
    	$dynamic=DB::table('ty_dynamic')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',9));
    	return view('home.dynamic',['dynamic'=>$dynamic,'request'=>$request]);
    }
}
