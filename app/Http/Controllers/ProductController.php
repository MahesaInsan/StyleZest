<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Clothes;
// use App\Models\color;
// use App\Models\Gender;
// use App\Models\Categories;
// use App\Models\Clothes_has_Colors;
// use App\Models\Clothes_has_Sizes;
// use App\Models\Size;


class ProductController extends Controller{

    public function index_product(){

        $clothes = Clothes::all();
        return view('index_product', ['clothes' => $clothes]);
    }
}


?>