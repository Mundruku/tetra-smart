<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    
   //welcome page

   public function welcome_page(Request $request){
      $category = [];
      $categories = Category::all();

      foreach($categories as $cat){
         $subCategory = DB::select('SELECT * FROM sub_categories WHERE category_id = "'.$cat->id.'" ');
         $cat->sub_category = $subCategory;
         array_push($category, $cat);
      }
      // return $category;
      return view('welcome')->with('category', $category);
   }

    //Show login form

   public function user_login_form(Request $request){
       
       return view('auth.user_login');

   }


    //Show login form

   public function user_register_form(Request $request){
       
       return view('auth.user_register');

   }

   public function view_users(Request $request){

      $users = User::all();
      return view('admin.users.viewUsers')->with('users', $users);
   }

   public function delete_user($id){
      $user = User::find($id);
      $user->delete();
      return redirect()->route('admin.view-users');
      // return redirect()->route('admin.category');
   }

    

    //user logout function

public function logout(Request $request){
     Auth::logout();
    return redirect('/');
}

   
}
