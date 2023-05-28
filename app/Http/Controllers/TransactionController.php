<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\transaction_detail;
use App\Models\transaction_has_clothes;
use App\Models\Custom;
use App\Models\color;
use App\Models\Size;

class TransactionController extends Controller
{
    public function showIndex(){
        $transactionD = transaction_detail::all();
        $custom = Custom::first();

        return view('admin.transactionindex', ['transactionD' => $transactionD, 'custom' => $custom]);
    }

    public function showTransaction(){
        $transactionD = transaction_detail::where('userId','=', auth::user()->id)->first(); 
        $custom = Custom::first();
        $transactionClothes = $transactionD->transaction_has_clothes;
        /* dd($transactionClothes); */

        return view('transaction', ['transactionHC' => $transactionClothes, 'transactionD'=> $transactionD, 'custom'=>$custom]);
    }

    public function deleteTransaction($id){
        $transactionClothes = transaction_has_clothes::findOrFail($id);
        $transactionClothes->delete();

        return redirect()->back();
    }

    public function deleteTransactionDet($id){
        $transactionDet = transaction_detail::findOrFail($id);
        $transactionDet->delete();

        return redirect()->back();
    }
}
