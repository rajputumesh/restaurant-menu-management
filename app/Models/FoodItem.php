<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Model
{
    use HasFactory;

    public function getImageAttribute($key)
    {
        if ($key) {
            return asset('storage/menus/' . $key);
        }
    }
}
