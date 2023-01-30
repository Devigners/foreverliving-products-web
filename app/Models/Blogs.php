<?php

namespace App\Models;

use App\Models\Master\FileUpload;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;
    protected $casts = [
        'tags' => 'array',
        'categories' => 'array'
    ];

    public function image()
    {
        return $this->hasOne(FileUpload::class, 'source_id', 'id')->where('source_des', 'Blogs');
    }

}
