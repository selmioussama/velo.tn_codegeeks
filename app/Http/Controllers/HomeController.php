<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\Models\User;

class HomeController extends Controller
{

    public function index (){
        return view('home.userpage');
    }
    public function redirect()
    {
     $role=Auth::user()->role;
     if ($role==='admin'){
         return view('admin.home');
     }else{
         return view('home.userpage');
     }

    }
}
