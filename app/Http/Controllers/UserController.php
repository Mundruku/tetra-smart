<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    
   //welcome page

   public function welcome_page(Request $request){
      return view('welcome');
   }

    //Show login form

    public function user_login_form(Request $request){
       
       return view('auth.user_login');

    }


    //Show login form

    public function user_register_form(Request $request){
       
       return view('auth.user_register');

    }

    //user logout function

public function logout(Request $request){
     Auth::logout();
    return redirect('/');
}

   
}
