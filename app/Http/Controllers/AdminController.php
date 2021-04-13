<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    //





    // 

//admin dashboard index() function

    public function index(){


        return view('dashboard');
    }

//Admin show login form function


public function show_login(Request $request){

     if(Auth::user()){
         return view('dashboard');
     }
     else
     {
         return view('auth.admin_login');
     }
}

//Admin logout function

public function logout(Request $request){
     Auth::logout();
    return redirect('/admin');
}

    
}
