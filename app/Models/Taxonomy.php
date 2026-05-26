<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Taxonomy extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'image'
    ];

    // Productos de la categoría
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
