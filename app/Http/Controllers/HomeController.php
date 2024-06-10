<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index()
    {
        if(Auth::id())
        {
            $usertype=Auth()->user()->role;

            if($usertype=='parents')
            {
                return view('parents');
            }
            elseif($usertype=='admin')
            {
                return view('admin');
            }
            elseif($usertype=='muip')
            {
                return view('muip');
            }
            elseif($usertype=='teachers')
            {
                return view('teachers');
            }
        }
    }
}
