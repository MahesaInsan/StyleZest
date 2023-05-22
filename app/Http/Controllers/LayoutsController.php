<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clothes;
use App\Models\color;
use App\Models\Gender;
use App\Models\Categories;
use App\Models\Size;

class LayoutsController extends Controller
{
    public function getDataForUser(){
        $colors = color::all();
        $genders = Gender::all();
        $categories = Categories::all();
        $sizes = Size::all();

        return view('layouts.userbox', ['categories' => $categories])->with('colors', $colors)->with('genders', $genders)->with('sizes', $sizes);
    }
}
