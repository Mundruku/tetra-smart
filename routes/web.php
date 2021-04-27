<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





 Route::group(['as' => 'admin.', 'prefix' => 'admin', 'middleware'=>['admin']], function() {
//Admin public route

Route::get('/', [App\Http\Controllers\AdminController::class, 'show_login']);



    //Admin route private route groups
Route::group(['middleware'=>['auth', 'admin']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //admin dashboard  route
    Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');
    Route::get('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
    
    //Category routes for the admin
    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
    Route::get('/sub-category', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub-category');



Route::get('/create-category', [App\Http\Controllers\CategoryController::class, 'create'])->name('create_category');
Route::get('/category-details', [App\Http\Controllers\CategoryController::class, 'show'])->name('category-details');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::post('category/store', "App\Http\Controllers\CategoryController@store")->name('category.store');
Route::put('/update-category/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category-update');
Route::get('/delete-category/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category-destroy');


//Route::get('/category-details/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category-details');
Route::get('/sub-category', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub-category');
Route::get('/category/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category-edit');

Route::post('subcategory/store', "App\Http\Controllers\CategoryController@store")->name('store');

Route::get('/create-sub-category', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('create-sub-category');
Route::post('/store-sub-category', [App\Http\Controllers\SubCategoryController::class, 'store'])->name('store-sub-category');

Route::post('/submit_subcategory', "App\Http\Controllers\SubCategoryController@store")->name('submit_subcategory');
Route::get('/subcategory-details/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'show'])->name('subcategory-details');
Route::get('/delete-subcategory/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'destroy'])->name('delete-subcategory');
Route::get('/sub-category/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('edit-sub-category');

 //Product routes 
 Route::get('product-view', [App\Http\Controllers\AdminController::class, 'product_view'])->name('product.view');
 Route::get('create-product', [App\Http\Controllers\AdminController::class, 'create_product'])->name('product_create');
 Route::post('create-product', [App\Http\Controllers\AdminController::class, 'product_save'])->name('product.save');
 Route::get('edit-product/{id}', [App\Http\Controllers\AdminController::class, 'edit_product'])->name('product_edit');
 Route::get('delete-product/{id}', [App\Http\Controllers\AdminController::class, 'delete_product'])->name('product_delete');
 Route::get('product-details/{id}', [App\Http\Controllers\AdminController::class, 'product_details'])->name('product_details');  
});



 });




//Public Route for the user 


Auth::routes();

Route::get('/', [App\Http\Controllers\UserController::class, 'welcome_page'])->name('home.page');

Route::get('user-login-form', [App\Http\Controllers\UserController::class, 'user_login_form'])->name('user.login.form');
Route::get('user-register-form', [App\Http\Controllers\UserController::class, 'user_register_form'])->name('user.register.form');


//Private routes for the user 
Route::group(['middleware'=>['auth']], function(){

  Route::get('user/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('user.logout');
    

});

