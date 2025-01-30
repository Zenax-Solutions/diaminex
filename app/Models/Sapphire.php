<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sapphire extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'description',
        'long_description',
        'gallery_images',
        'model_path',
        'slug',
        'is_published',
    ];

    protected $casts = [
        'gallery_images' => 'array', // Ensure gallery_images is treated as an array
        'is_published' => 'boolean',
    ];
}
