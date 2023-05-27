<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_detail extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function transaction_has_clothes(){
        return $this->hasMany(transaction_has_clothes::class, 'transactionId');
    }

    public function user(){
        return $this->belongsTo(User::class, 'userId');
    }   

}
