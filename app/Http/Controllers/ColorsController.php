<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\color;

class ColorsController extends Controller
{
    public function getColors(){
        $colors = color::all();

        return view('admin.colorindex', ['colors' => $colors]);
    }    

    public function addColors(){
        $colorname = color::all();
        $colorcode = color::all();

        return view('admin.addcolor', ['colorname' => $colorname, 'colorcode' => $colorcode]);
    }

    public function saveColors(Request $request){
        color::insert([
            'colorname' => $request->colorname,
            'colorcode' => $request->colorcode
        ]);

        return redirect()->back()->with('success', 'Color added successfully!');
    }
    
    public function editColors($id){
        $color = color::find($id);
        $colorname = color::all();
        $colorcode = color::all();
    
        return view('/admin/editcolors', ['color' => $color, 'colorname' => $colorname, 'colorcode' => $colorcode]);
    }

    public function updateColors($id, Request $request){
        $color = color::find($id);

        $color->colorname = $request->colorname;
        $color->colorcode = $request->colorcode;
        $color->save();

        return redirect('/admin/color')->with('success', 'Color updated successfully.');
    }

    public function deleteColors($id){
        $color = color::findOrFail($id);
        $color->delete();

        return redirect()->back()->with('success', 'Color deleted successfully');
    }
}
