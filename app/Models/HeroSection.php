<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'page',
        'title',
        'subtitle',
        'background_image',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];
}