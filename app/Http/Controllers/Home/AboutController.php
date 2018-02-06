<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class AboutController extends Controller
{
    public function index()
    {
    	$about = DB::table('ty_company')->where('id',1)->first();
    	return view('home.about',['about'=>$about]);
    }
}
