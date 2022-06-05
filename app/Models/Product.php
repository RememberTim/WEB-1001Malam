<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nama',
        'tipe',
        'deskripsi',
        'bahan',
        'harga',
        'keuntungan',
        'stok',
    ];

    protected $hidden = [
        
    ];

    public function galleries()
    {
         return $this->hasMany(ProductGallery::class,'products_id');
    }
}
