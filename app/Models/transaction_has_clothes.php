<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaction_has_clothes extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function transaction_detail(){
        return $this->belongsTo(transaction_detail::class);
    }

    public function clothes(){
        return $this->belongsTo(Clothes::class, 'clothesId');
    }

    public function size(){
        return $this->belongsTo(Size::class, 'sizeId');
    }

    public function color(){
        return $this->belongsTo(color::class, 'colorId');
    }

}
