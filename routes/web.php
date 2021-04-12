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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

 Route::group(['as' => 'admin.', 'prefix' => 'admin'], function() {




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin dashboard  route
Route::get('dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('dashboard');


//Category routes for the admin
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/sub-category', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub-category');



 });