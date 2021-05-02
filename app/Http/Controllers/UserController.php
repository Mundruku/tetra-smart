<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;
use Session;

class UserController extends Controller
{
    
   //welcome page

   public function welcome_page(Request $request){
      $category = [];
      $categories = Category::all();

      foreach($categories as $cat){
         $subCategory = DB::select('SELECT * FROM sub_categories WHERE category_id = "'.$cat->id.'" ');
         $temp_sub_cat = [];
         foreach($subCategory as $sub_cat){
            $products = DB::select('SELECT* FROM products WHERE sub_category_id = "'.$sub_cat->id.'"');
            $sub_cat->products = $products;
            array_push($temp_sub_cat, $sub_cat);
         }


         $cat->sub_category = $temp_sub_cat;
         array_push($category, $cat);
      }
      $category_products = DB::select('SELECT p.*, c.name  AS category FROM products p INNER JOIN categories c ON p.category_id = c.id');
      return view('welcome')->with('category', $category)->with('products', $category_products);
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

   //Adding to cart session

   public function add_to_cart(Request $request, $id){
      $product=Product::find($id);
      $existing_cart=Session::has('cart')?Session::get('cart'):null;

      $cart=new Cart($existing_cart);
      $cart->add_to_cart($product, $product->id);

      $request->session()->put('cart', $cart);
       return view('welcome');
   }

   
}