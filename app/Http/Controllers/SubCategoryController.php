<?php

namespace App\Http\Controllers;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $subCategory = SubCategory::all();
        $subCategory = DB::select('select sb.*, c.name as category from sub_categories sb inner join categories c on sb.category_id = c.id');
        return view('admin.subCategory')->with('subCategory', $subCategory);
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $category =  Category::all();
        return view('admin.subCategory.createSubCategory')->with('category', $category);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'image'=>'required|mimes:jpeg,png,jpg|max:5048',
            'category_id'=>'required'
        ]);

        $newImageName = time(). '-' . $request->name.'.'. $request->image->extension();
        
        $request->image->move(public_path('images/sub_category'), $newImageName);

        $sub_category = new SubCategory;
        $sub_category->name = $request->input('name');
        $sub_category->image = $newImageName;
        $sub_category->category_id = $request->input('category_id');

        
        $sub_category->save();
        return redirect()->route('sub-category');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
        $sub_category = DB::select('select sb.*, c.name as category from sub_categories sb inner join categories c on sb.category_id = c.id
                                    where sb.id = '.$subCategory->id );

        return view('subCategoryDetails')->with('subCategory', $sub_category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        return view('updateSubCategory');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        $subCategory->delete();
        return redirect()->route('sub-category');
     
    }
}
