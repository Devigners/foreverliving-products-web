<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Countries extends Model
{
    use HasFactory;

    public static function getWithStatus($status = "Active")
    {
        return self::where('status', $status)->get();
    }

    // has many states
    public function states()
    {
        return $this->hasMany(States::class, 'country_id', 'id');
    }

    // has many rest areas
    public function restAreas()
    {
        return $this->hasMany(RestAreas::class, 'country_id', 'id');
    }

}
