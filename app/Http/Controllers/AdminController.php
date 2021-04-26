<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Product;
use App\Models\Category;
use App\Models\SubCategory;


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

	$categories=Category::all();
	$sub_categories=SubCategory::all();

    return view('admin.product.create')
              ->with('product', null)
               ->with('sub_categories', $sub_categories)
               ->with('categories', $categories);
}




    public static function file_name() {

        $file_name = time();
        $file_name .= rand();
        $file_name = sha1($file_name);

        return $file_name;    
    }


    public function product_view(Request $request){
       $product=Product::all();
        
       return  view('admin.product.index')->with('products', $product);


    }


    public static function web_url() 
    {
        return url('/');
    }

    //product save

public function product_save(Request $request){

     
	if($request->product_id){
        $product_to_edit=Product::find($request->product_id);

        $product_to_edit->product_name=$request->product_name;
        $product_to_edit->category_id=$request->category;
        $product_to_edit->sub_category_id=$request->sub_category;
        $product_to_edit->purchase_price=$request->purchase_price;
        
      
       $product_to_edit->price=$request->normal_price?$request->normal_price:$product_to_edit->price;
    

        
        $product_to_edit->save();
        $product_details=Product::all();

        return  view('admin.product.index')->with('products', $product_details);

     }
    

         /**Validate the data using validation rules
    */
    $validator = $request->validate([
        'product_name' => 'required',
        'category' => 'required',
        'sub_category' => 'required',
        'picture' => 'required',
        'purchase_price'=>'required'
    ]);

    
    
        
        $product=new Product();

        $file_path_url = "";

        $file_name =AdminController::file_name();

        $ext =  $request->file('picture')->getClientOriginalExtension();

        $local_url = $file_name . "." . $ext;

        $inputFile = base_path('public'.'images/products/'.$local_url);
        
        $request->file('picture')->move(public_path().'/images/products', $inputFile);

        $file_path_url = AdminController::web_url().'/images/products/'.$local_url;

        $product->product_name=$request->product_name;
        $product->category_id=$request->category;
        $product->sub_category_id=$request->sub_category;
        $product->picture_url=$file_path_url;
        $product->purchase_price=$request->purchase_price;
        $product->price=$request->normal_price?$request->normal_price:null;
        if ($product->save()) {
           $product_details=Product::all();

           return  view('admin.product.index')->with('products', $product_details);
        }

}


//product edit

public function edit_product(Request $request, $id){
   $product=Product::join('categories', 'categories.id', '=', 'products.category_id')
   ->join('sub_categories', 'sub_categories.id', '=', 'products.sub_category_id')
   ->where('products.id', $id)->select('products.id as product_id', 'categories.id as category_id', 'products.product_name', 'categories.name as category_name', 'sub_categories.id as sub_category_id', 'sub_categories.name as sub_category_name', 'products.price', 'products.purchase_price')->first();


	$categories=Category::all();
	$sub_categories=SubCategory::all();

   return view('admin.product.edit')
          ->with('sub_categories', $sub_categories)
          ->with('categories', $categories)
          ->with('product', $product);

}

//Delete product

public function delete_product(Request $request, $id){
	$del=Product::find($id)->delete();

	if ($del) {
	$product_details=Product::all();
	return  view('admin.product.index')->with('products', $product_details);
	}
}

//Product detail view function 


public function product_details(Request $request, $id){
       $product=Product::find($id);
    
    return view('admin.product.view')->with('product', $product);

}





    
}
