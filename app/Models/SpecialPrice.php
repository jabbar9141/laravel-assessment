<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'special_price',
        'user_id',
        'product_id'
    ];

    function client()
    {
        return $this->belongsTo(User::class);
    }

    function product()
    {
        return $this->belongsTo(Product::class);
    }
}
