<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

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

   public function __construct()
    {
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
       View::share( 'category', $category);
       View::share( 'products', $category_products );
    }
    
   //welcome page

   public function welcome_page(Request $request){
      
      // return $category;
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

   //view cart items 

   public function view_cart_items(Request $request){
      return view('user.cart.index');
   }

   //Adding to cart session

   public function add_to_cart(Request $request, $id){
      $product=Product::find($id);
      $existing_cart=$request->session()->has('cart') ? $request->session()->get('cart') : null;
      $cart=new Cart($existing_cart);
      $cart->add_to_cart($product, $product->id);
      $request->session()->put('cart', $cart);
      return redirect('/view-cart-items');
   }


// *************************************************************************************** bash cod

public function view_product_details(Request $request, $id){

        $product_details=Product::join('categories', 'products.category_id', '=', 'categories.id')
        ->join('sub_categories', 'products.sub_category_id', '=', 'sub_categories.id')->select('sub_categories.name as sub_category_name',)->first();

      $product_details = DB::select('SELECT p.*, C.name AS category_name,S.name AS sub_category_name FROM products P 
      INNER JOIN categories C ON P.category_id = C.id INNER JOIN sub_categories S ON P.sub_category_id = S.id WHERE P.id = "'.$id.'" ');
      // $product_details = $product_details[0];
      // return $product_details[0]->product_name;
      return view('user.products.product_details')->with("product_details", $product_details);


}




   
}