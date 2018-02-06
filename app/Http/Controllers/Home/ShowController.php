<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ShowController extends Controller
{
    public function index()
    {
    	$show = DB::table('ty_company')->where('id',2)->first();
    	return view('home.show',['show'=>$show]);
    }
}
