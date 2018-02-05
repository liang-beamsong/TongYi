<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class ListController extends Controller
{
    public function article($id)
    {
    	return $this->Getupanddown('ty_article',$id,'articles');
    }

    public function dynamic($id)
    {
    	return $this->Getupanddown('ty_dynamic',$id,'dynamics');
    }

    public function activity($id)
    {
    	return $this->Getupanddown('ty_activity',$id,'activitys');
    }

    public function advantage($id)
    {
    	return $this->Getupanddown('ty_advantage',$id,'advantages');
    }

    public function partner($id)
    {
    	return $this->Getupanddown('ty_partner',$id,'partners');
    }

    public function Getupanddown($data,$id,$path)
    {
    	$list = DB::table($data)->where('id',$id)->first();
    	$nextId = DB::table($data)->where('id','>',$id)->min('id');
    	$previousId = DB::table($data)->where('id','<',$id)->max('id');
    	$next = DB::table($data)->where('id',$nextId)->first();
    	$previous = DB::table($data)->where('id',$previousId)->first();
    	return view('home.list',['list'=>$list,'previous'=>$previous,'next'=>$next,'path'=>$path]);
    }
}
