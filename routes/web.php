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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/create-category', [App\Http\Controllers\CategoryController::class, 'create'])->name('create_category');
Route::get('/category-details/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('category-details');
Route::get('/sub-category', [App\Http\Controllers\SubCategoryController::class, 'index'])->name('sub-category');
Route::get('/category/{category}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category-edit');
Route::put('/update-category/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('category-update');
Route::get('/delete-category/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('category-destroy');
Route::post('/store', "App\Http\Controllers\CategoryController@store")->name('store');

Route::get('/create-sub-category', [App\Http\Controllers\SubCategoryController::class, 'create'])->name('create-sub-category');

Route::post('/submit_subcategory', "App\Http\Controllers\SubCategoryController@store")->name('submit_subcategory');
Route::get('/subcategory-details/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'show'])->name('subcategory-details');
Route::get('/delete-subcategory/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'destroy'])->name('delete-subcategory');
Route::get('/sub-category/{subCategory}', [App\Http\Controllers\SubCategoryController::class, 'edit'])->name('edit-sub-category');