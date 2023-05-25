<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;
use App\Models\Size;
use App\Models\Clothes_has_Sizes;

class SizesController extends Controller
{
    //show all data about size
    public function showsize(){
        $sizes = Size::all();
        
        return view('admin.sizeindex', ['sizes' => $sizes]);
    }

    public function addSizes(){
        $sizeName = Size::all();
        $sizeDesc = Size::all();

        return view('admin.addsize', ['sizeName ' => $sizeName, 'sizeDesc' => $sizeDesc]);
    }

    public function saveSizes(Request $request){
        Size::insert([
            'sizeCode' => $request->sizeName,
            'sizeDesc' => $request->sizeDesc
        ]);

        return redirect()->back()->with('success', 'Size added successfully!');
    }   

    public function editSizes($id){
        $size = Size::find($id);
        $sizeName = Size::all();
        $sizeDesc = Size::all();
    
        return view('admin.editsizes', ['size' => $size, 'sizeName' => $sizeName, 'sizeDesc' => $sizeDesc]);
    }

    public function updateSizes($id, Request $request){
        $size = Size::find($id);

        $size->sizeName = $request->sizeName;
        $size->sizeDesc = $request->sizeDesc;
        $size->save();

        return redirect('/admin/sizeindex')->with('success', 'Size updated successfully.');
    }

    public function deleteSizes($id){
        $size = Size::findOrFail($id);
        $size->delete();

        return redirect()->back()->with('success', 'Size deleted successfully');
    }
}




