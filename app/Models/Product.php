<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        protected $fillable = [
        'name',
        'slug',
        'details',
        'description',
        'product_code',
        'main_image',
        'alt_images',
        'price',
        'quantity',
    ];
}
