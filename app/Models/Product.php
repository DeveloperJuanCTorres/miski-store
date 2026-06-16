<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_id',
        'taxonomy_id',
        'name',
        'slug',
        'description',
        'price',
        'price_oferta',
        'images',
        'stock',
        'is_active',
        'is_liquidacion'
    ];

    // Marca
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Categoría / Taxonomía
    public function taxonomy()
    {
        return $this->belongsTo(Taxonomy::class);
    }

    public function colors()
    {
        return $this->belongsToMany(
            Color::class,
            'color_product',
            'product_id',
            'color_id'
        );
    }
}
