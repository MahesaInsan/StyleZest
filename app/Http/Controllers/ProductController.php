<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Clothes;
use Illuminate\Support\Facades\DB;

// use App\Models\color;
// use App\Models\Gender;
// use App\Models\Categories;
// use App\Models\Clothes_has_Colors;
// use App\Models\Clothes_has_Sizes;
// use App\Models\Size;


class ProductController extends Controller{

    // public function index_product(Request $request){

    //     $clothes = Clothes::all();
    //     return view('index_product', ['clothes' => $clothes]);
    // }

    public function index_product(Request $request){

        $query = Clothes::query();

        if ($request->has('category')) {
        $category = $request->category;
        $query->whereHas('categories', function ($q) use ($category) {
            $q->where('categoryName', $category);
        });


        if ($request->has('gender')) {
            $gender = $request->gender;
            $query->whereHas('gender', function ($q) use ($gender) {
                $q->where('genderName', $gender);
            });
        }

        if ($request->has('size')) {
            $size = $request->size;
            $query->whereHas('sizes', function ($q) use ($size) {
                $q->where('sizeCode', $size);
            });
        }

        $clothes = $query->get();

        return view('index_product', ['clothes' => $clothes]);
    }

}
    
}


?>