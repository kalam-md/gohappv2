<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'category',
        'caption',
        'order',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}
