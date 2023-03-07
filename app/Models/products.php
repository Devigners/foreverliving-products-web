<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'title',
        'country',
        'slug',
        'price',
        'category',
        'quantity',
        'sku',
        'total_reviews',
        'total_rating',
        'ingredients',
        'tags',
        'short_description',
        'description',
        'usage',
        'original_link',
        'affiliate_link',
        'video_link',
        'image_link',
        'status',
        
    ];
}