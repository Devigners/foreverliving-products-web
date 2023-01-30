<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferCards extends Model
{
    use HasFactory;

    protected $casts = [
        'country_links' => 'array',
    ];

}
