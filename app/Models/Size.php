<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;

    public function sizes(){
        return $this->belongsToMany(Clothes::class, 'Clothes_has__Sizes', 'SizeId', 'ClothesId');
    }
}
