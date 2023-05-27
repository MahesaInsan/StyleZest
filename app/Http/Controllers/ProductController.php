<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Clothes;
use App\Models\transaction_detail;
use App\Models\transaction_has_clothes;
use Illuminate\Support\Facades\Auth;


class ProductController extends Controller{

    public function addtoCart($id, Request $request){
        /* dd($request); */
        $clothes = Clothes::find($id);
        $totPrice = $request->inAmount * $clothes->price;
        $transaction = transaction_detail::where('userId', '=', auth::user()->id)->first();

        transaction_has_clothes::insert([
            'count' => $request->inAmount,
            'totPrice' => $totPrice,
            'transactionId'=> $transaction->id,
            'clothesId' => $id,
            'sizeId' => $request->inSize,
            'colorId' => $request->inColor
        ]);

        $transaction->totPrice = $transaction->totPrice + $totPrice;
        $transaction->totItem = $transaction->totItem + $request->inAmount;
        $transaction->save();

        return redirect('home');
    }
}


?>