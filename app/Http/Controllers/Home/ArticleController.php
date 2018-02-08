<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ArticleController extends Controller
{
    public function index(Request $request)
    {
    	$nav_id=DB::table('ty_nav')->where('nid','2')->get();
      $article = [];
      for($i = 0; $i<count($nav_id); $i++){
          $id=$nav_id[$i]->id;
          $article[$i] = DB::table('ty_article as a')
                  ->join('ty_nav as b','a.nav_id','=','b.id')
                  ->where('a.nav_id',$id)
                  ->select('a.*','b.name')
                  ->orderBy('a.id','desc')
                  ->limit(3)
                  ->get();
      }
    	return view('home.article',['article'=>$article]);
    }
}
