<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class color extends Model
{
    use HasFactory;

    public function clothes(){
        return $this->belongsToMany(Clothes::class, 'Clothes_has__Colors', 'colorId', 'clothesId');
    }
    public $timestamps = false;
}
