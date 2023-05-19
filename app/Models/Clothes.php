<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothes extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function colors(){
        return $this->belongsToMany(color::class, 'Clothes_has__Colors', 'clothesId', 'colorId');
    }

    public function sizes(){
        return $this->belongsToMany(Size::class, 'Clothes_has__Sizes', 'clothesId', 'sizeId');
    }
}
