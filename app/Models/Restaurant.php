<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    public function menus()
    {
        return $this->hasMany(FoodItem::class);
    }

    public function getImageAttribute($key)
    {
        if ($key) {
            return asset('storage/restaurants/' . $key);
        }
        return asset('images/restaurent.webp');
    }
}
