<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        return view('admin.category.category')->with('category', $category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // methods we can use on request
        // guessExtension()
        // getMimeTypes
        // asStore()
        // storePublicly()
        // move()
        // getClientOriginalName()
        // getClientMimeType()
        // guessClientExtension()
        // getSize()
        // getError()
        // isValid()

         // $test = $request->file('images')->guessExtension();



        $this->validate($request, [
            'name' => 'required',
            'image'=>'required|mimes:jpeg,png,jpg|max:5048',
        ]);

        $newImageName = time(). '-' . $request->name.'.'. $request->image->extension();
        
        $request->image->move(public_path('images/category'), $newImageName);

        $category = new Category;
        $category->name = $request->input('name');
        $category->image = $newImageName;
        $category->save();

        return redirect()->route('admin.category')->with('success', 'Category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        // return $category;
        return view('admin.category.categoryDetails')->with('category', $category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {

        $category = Category::find($category->id);
        return view('admin.category.updateCategory')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //

        // return $request;
        return redirect()->route('admin.category');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
        $category = Category::find($category->id);
        $category->delete();
        return redirect()->route('admin.category');
    }
}
