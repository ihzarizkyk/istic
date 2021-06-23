<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = "products";

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function shippings()
    {
     return $this->hasMany(Shipping::class,"product_id");
    }
}
