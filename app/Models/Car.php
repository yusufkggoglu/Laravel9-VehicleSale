<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;
    # many to one
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    # many to one
    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }
}
