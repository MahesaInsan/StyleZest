<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    public function clothes(){
        return $this->belongsToMany(Clothes::class, 'Clothes_has__Sizes', 'SizeId', 'ClothesId');
    }

    public function transaction_has_clothes(){
        return $this->hasMany(transaction_has_clothes::class, 'sizeId');
    }
    public $timestamps = false;
}
