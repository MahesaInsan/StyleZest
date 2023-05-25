<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\color;
use App\Models\Gender;
use App\Models\Categories;
use App\Models\Size;

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

        return view('home', ['categories' => $categories])->with('colors', $colors)->with('genders', $genders)->with('sizes', $sizes)->with('clothes', $clothes);
    }
    
    public function adminHome(){
        $clothes = Clothes::all();
        $colors = color::all();
        $genders = Gender::all();
        $categories = Categories::all();
        $sizes = Size::all();

        return view('admin.adminhome', ['clothes' => $clothes, 'colors' => $colors, 'genders' => $genders, 'categories' => $categories, 'sizes' => $sizes]);
    }

    public function showsize(){
        $sizes = Size::all();
        
        return view('admin.sizeindex', ['sizes' => $sizes]);
    }

    public function adminColor(){
        $colors = color::all();

        return view('admin.colorindex', ['colors' => $colors]);
    }

    public function adminCategory(){
        $categories = Categories::all();

        return view('admin.categoryindex', ['categories' => $categories]);
    }

    public function adminGender(){
        $genders = Gender::all();

        return view('admin.genderindex', ['genders' => $genders]);
    }
}
