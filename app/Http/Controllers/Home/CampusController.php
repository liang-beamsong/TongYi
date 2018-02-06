<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class CampusController extends Controller
{
    public function index()
    {
    	$campus = DB::table('ty_company')->where('id',3)->first();
    	return view('home.campus',['campus'=>$campus]);
    }
}
