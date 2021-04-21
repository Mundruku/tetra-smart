<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App/Models/Product;


class AdminController extends Controller
{
    //





    // 

//admin dashboard index() function

    public function index(){


        return view('admin.dashboard');
    }

//Admin show login form function


public function show_login(Request $request){

     if(Auth::user()){
         return view('admin.dashboard');
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




//Product create view function
public function create_product(Request $request){

    return view('admin.product.create');
}

//product save

public function product_save(Request $request){

         /**Validate the data using validation rules
    */
    $validator = Validator::make($request->all(), [
        'product_name' => 'required',
        'category_id' => 'required',
        'sub_category_id' => 'required',
        'picture' => 'required',
    ]);

    /**Check the validation becomes fails or not*/
    if ($validator->fails()) {
        /**Return error message
        */
        return $validator->errors();
    }
        
        $product=new Product();

   
        $product_image_url_name = time(). '-' . $request->name.'.'. $request->image->extension();
        
        $request->image->move(public_path('images/products'), $product_image_url_name);

        $product->product_name=$request->product_name;
        $product->category_id=$request->category_id;
        $product->sub_category_id=$Request->sub_category_id;
        $product->picture=$product_image_url_name;

        if ($product->save()) {
           return  view('admin.product.index');
        }

}

    
}
