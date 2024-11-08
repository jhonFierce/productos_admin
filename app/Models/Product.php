<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'description',
        'category_id',
        'image',
        'rating_rate',
        'rating_count',
    ];

    // Valores por defecto
    protected $attributes = [
        'rating_rate' => null,
        'rating_count' => null,
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
