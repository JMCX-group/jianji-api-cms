<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User; //测试用户表

class TestController extends Controller
{
    //
    public function index()
    {
        return view('apitest');
    }

    public function test(Request $request)
    {
        $uid = $request->input('uid');
        return response()->json(User::find($uid));
    }
}
