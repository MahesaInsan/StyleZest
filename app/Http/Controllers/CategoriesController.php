<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Custom;

class CategoriesController extends Controller
{
    public function getCategories(){
        $categories = Categories::all();
        $categories = Categories::all();
        $custom = Custom::first();

        return view('admin.categoryindex', ['categories' => $categories, 'custom'=>$custom]);
    } 
    
    public function addCategories(){
        $categoryName = Categories::all();
        $categoryDesc = Custom::all();
        $custom = Custom::first();

        return view('admin.addcategory', ['categoryName' => $categoryName, 'categoryDesc' => $categoryDesc, 'custom'=>$custom]);
    }

    public function saveCategories(Request $request){
        Categories::insert([
            'categoryName' => $request->categoryName,
            'categoryDesc' => $request->categoryDesc
        ]);

        return redirect()->back()->with('success', 'Category added successfully!');
    }

    public function editCategories($id){
        $category = Categories::find($id);
        $categoryName = Categories::all();
        $categoryDesc = Categories::all();
        $custom = Custom::first();
    
        return view('admin.editcategories', ['category' => $category, 'categoryName' => $categoryName, 'categoryDesc' => $categoryDesc, 'custom'=>$custom]);
    }

    public function updateCategories($id, Request $request){
        $category = Categories::find($id);

        $category->categoryName = $request->categoryName;
        $category->categoryDesc = $request->categoryDesc;
        $category->save();

        return redirect('/admin/category')->with('success', 'Category updated successfully.');
    }

    public function deleteCategories($id){
        $category = Categories::findOrFail($id);
        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully');
    }
}
