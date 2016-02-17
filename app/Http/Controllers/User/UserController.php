<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function showAllUser()
    {
        return view('login', ['user' => User::all()]);
    }
}
