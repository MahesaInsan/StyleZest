<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function getCategories(){
        $categories = Categories::all();

        return view('admin.categoryindex', ['categories' => $categories]);
    } 
    
    public function addCategories(){
        $categoryName = Categories::all();
        $categoryDesc = Categories::all();

        return view('admin.addcategory', ['categoryName' => $categoryName, 'categoryDesc' => $categoryDesc]);
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
    
        return view('admin.editcategories', ['category' => $category, 'categoryName' => $categoryName, 'categoryDesc' => $categoryDesc]);
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
