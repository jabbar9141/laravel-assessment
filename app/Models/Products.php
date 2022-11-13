<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsToMany(User::class,'product_users', 'user_id', 'price_id' );
    }

}
