<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\color;

class ColorsController extends Controller
{
    public function getColors(){
        $colors = color::all();

        return $colors;
    }
}
