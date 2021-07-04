<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    use HasFactory;

    protected $table = "shipping";

    public function user()
    {
        $this->belongsTo(User::class,"shipping_id");
    }

    public function product()
    {
        $this->belongsTo(Product::class,"id");
    }
}
