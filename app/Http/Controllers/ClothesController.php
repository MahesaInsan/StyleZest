<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Clothes;
use App\Models\color;
use App\Models\Gender;
use App\Models\Categories;
use App\Models\Clothes_has_Colors;
use App\Models\Clothes_has_Sizes;
use App\Models\Size;        


class ClothesController extends Controller
{
    public function getId($clName){
        $clothesId = DB::table('clothes')->where('clothesName', $clName)->pluck('id')->first();
        return $clothesId;
    }
    
    public function addClothes(){
        $colors = color::all();
        $genders = Gender::all();
        $categories = Categories::all();
        $sizes = Size::all();

        return view('admin.addclothes', ['colors' => $colors, 'genders' => $genders, 'categories' => $categories, 'sizes' => $sizes]);
    }
    
    public function saveClothes(Request $request){
        $image = $request->file('inImg');
        $imageName = time() . '.' . $image->extension();
        $image->storeAs('public/images/clothes', $imageName);

        Clothes::insert([
            'image' => $imageName,
            'clothesName' => $request->inName,
            'clothesDescription' => $request->inDesc,
            'stock' => $request->inStock,
            'price' => $request->inPrice,
            'genderId' => $request->inGender,
            'categoryId' => $request->inCategories,
        ]);
        
        $clothesId = $this->getId($request->inName);
        $selectedColors = $request->input('inColor');
        for($color = 0; $color < count($selectedColors); $color++){
            Clothes_has_Colors::insert([
                'clothesId' => $clothesId,
                'colorId' =>$selectedColors[$color],
            ]);
        }

        $selectedSizes = $request->input('inSize');
        for($size = 0; $size < count($selectedSizes); $size++){
            Clothes_has_Sizes::insert([
                'clothesId' => $clothesId,
                'sizeId' =>$selectedSizes[$size],
            ]);
        }
        
        return redirect('/admin/home')->with('success', 'Clothes added successfully.');
    }

    public function editClothes($id){
        $clothes = Clothes::find($id);
        $colors = color::all();
        $genders = Gender::all();
        $categories = Categories::all();
        $sizes = Size::all();
        
        return view('/admin/editclothes', ['clothes' => $clothes, 'colors' => $colors, 'genders' => $genders, 'categories' => $categories, 'sizes' => $sizes]);
    }

    public function updateClothes($id, Request $request){
        $clothes = Clothes:: find($id);

        $clothes->clothesName = $request->inName;
        $clothes->clothesDescription = $request->inDesc;
        $clothes->categoryId = $request->inCategories;
        $clothes->genderId = $request->inGender;
        $clothes->stock = $request->inStock;
        $clothes->price = $request->inPrice;
        $clothes->save();

        return redirect('/admin/home')->with('success', 'Clothes updated successfully.');
    }

    public function deleteClothes($id){
        $clothes = Clothes::findOrFail($id);
        $clothes->delete();

        return redirect()->back()->with('success', 'Clothes deleted successfully');
    }
    
}
