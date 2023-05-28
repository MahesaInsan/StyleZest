<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\color;
use App\Models\Gender;
use App\Models\Categories;
use App\Models\Size;
use App\Models\Custom;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clothes = Clothes::all();
        $colors = color::all();
        $genders = Gender::all();
        $categories = Categories::all();
        $sizes = Size::all();
        $custom = Custom::first();

        return view('home', ['categories' => $categories, 'custom' => $custom])->with('colors', $colors)->with('genders', $genders)->with('sizes', $sizes)->with('clothes', $clothes);
    }

    public function filter($filter, $name_filter)
    {
        if ($filter == 'gender') {
            $gender = Gender::where('genderName', $name_filter)->first();
            $clothes = Clothes::where('genderId', $gender->id)->get();
        } else if ($filter == 'category') {
            $category = Categories::where('categoryName', $name_filter)->first();
            $clothes = Clothes::where('categoryId', $category->id)->get();
        // } else if ($filter == 'sizes') {
        //     $clothes = Clothes::all();
        //     $size = Size::where('sizeCode', $name_filter)->first();
        //     $clothes = Clothes::where('sizeId', $size->id)->get();
        } else {
            $clothes = Clothes::all();
        }

        $colors = color::all();
        $genders = Gender::all();
        $categories = Categories::all();
        $sizes = Size::all();
        $custom = Custom::first();

        return view('home', ['categories' => $categories, 'name'=>$name_filter])->with('colors', $colors)->with('genders', $genders)->with('sizes', $sizes)->with('clothes', $clothes)->with('custom', $custom);
    }

    
    public function adminHome(){
        $clothes = Clothes::all();
        $colors = color::all();
        $genders = Gender::all();
        $categories = Categories::all();
        $sizes = Size::all();
        $custom = Custom::first();

        return view('admin.adminhome', ['clothes' => $clothes, 'custom' => $custom, 'colors' => $colors, 'genders' => $genders, 'categories' => $categories, 'sizes' => $sizes]);
    }

    public function showsize(){
        $sizes = Size::all();
        $custom = Custom::first();
        
        return view('admin.sizeindex', ['sizes' => $sizes, 'custom' => $custom]);
    }

    public function adminColor(){
        $colors = color::all();
        $custom = Custom::first();

        return view('admin.colorindex', ['colors' => $colors, 'custom' => $custom]);
    }

    public function adminCategory(){
        $categories = Categories::all();
        $custom = Custom::first();

        return view('admin.categoryindex', ['categories' => $categories, 'custom' => $custom]);
    }

    public function adminGender(){
        $genders = Gender::all();
        $custom = Custom::first();

        return view('admin.genderindex', ['genders' => $genders, 'custom' => $custom]);
    }
    
    public function adminCustomizeweb(){
        $custom = Custom::first();

        return view('admin.customizewebindex', ['custom' => $custom]);
    }
}
