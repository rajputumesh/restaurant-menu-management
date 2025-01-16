<?php

namespace Database\Seeders;

use App\Models\FoodItem;
use App\Models\Restaurant;
use Illuminate\Database\Seeder;

class RestaurantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $restaurants = Restaurant::factory(3)->create();
        foreach ($restaurants as $restaurant) {
            FoodItem::factory(5)->create(['restaurant_id' => $restaurant->id]);
        }
    }
}
