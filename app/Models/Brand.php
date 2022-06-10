<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    #one To Many
    public function cars()
    {
        return $this->hasMany(Car::class);
    }
}
