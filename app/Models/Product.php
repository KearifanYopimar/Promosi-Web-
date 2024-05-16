<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id_product';
    protected $fillable = [
        'Product_Name',
        'Price',
        'Qty',
        'Description',
        'image',
        'Kategori',
    ];
}
