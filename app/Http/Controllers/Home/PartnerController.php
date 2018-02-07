<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class PartnerController extends Controller
{
    public function index(Request $request)
    {
    	$partner=DB::table('ty_partner')->where(function($quest)use($request){
            $keyword=$request->input('title');
             if($keyword){
                 $quest->where('title','like','%'.$keyword.'%');
              }
            })->orderBy('id','desc')->paginate($request->input('list_length',9));
    	return view('home.partner',['partner'=>$partner,'request'=>$request]);
    }
}
