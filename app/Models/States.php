<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
    ];

    // has many rest areas
    public function restAreas()
    {
        return $this->hasMany(RestAreas::class, 'state_id', 'id');
    }

}
