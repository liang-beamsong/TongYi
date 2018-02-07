<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
class MessageController extends Controller
{
    //留言提交
    public function insert(Request $request)
    {
        $data = $request->except('_token');
        $data['time'] = time();
        $res = DB::table('ty_message')->insert($data);
        if($res){
            echo json_encode(["status"=>200,"info"=>"提交成功!"]);
        }else{
            echo json_encode(["status"=>502,"info"=>"提交失败!"]);
        }
    }

    //报名提交
    public function signup(Request $request)
    {
        $data = $request->except('_token');
        $data['time'] = time();
        $res = DB::table('ty_signup')->insert($data);
        if($res){
            echo json_encode(["status"=>200,"info"=>"提交成功!"]);
        }else{
            echo json_encode(["status"=>502,"info"=>"提交失败!"]);
        }
    }
}
