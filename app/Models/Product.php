<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use Illuminate\Database\Eloquent\SoftDeletes; // Import SoftDeletes

class Product extends Model
{
    use HasFactory, SoftDeletes; // Gunakan trait SoftDeletes

    protected $table = 'products'; // Ubah ke 'products' (jamak)

    protected $primaryKey = 'id_product';
    protected $fillable = [
        'Product_Name',
        'Price',
        'Qty',
        'Description',
        'image',
        'KategoriAA',
    ];
=======

class Product extends Model
{
    use HasFactory;
>>>>>>> 34aca4c04279cf1cb0308240c7e2a79c6ea6a443
}
