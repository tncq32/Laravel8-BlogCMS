<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'category_id',
        'title',
        'barcode',
        'product_code', 'stock_code',
        'description',
        'front_image',
        'rank',
        'status'
    ];
}
