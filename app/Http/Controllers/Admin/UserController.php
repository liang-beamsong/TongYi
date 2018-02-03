<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getFront()
    {
    	return view('admin.user.front');
    }

    public function getBack()
    {
    	return view('admin.user.back');
    }
}
