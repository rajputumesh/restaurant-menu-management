<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FrontendController extends Controller
{
    public function index()
    {
        $restaurants = Cache::remember('restaurants', 3600, function () {
            return Restaurant::orderBy('id', 'desc')->get();
        });
        return view('welcome', compact('restaurants'));
    }

    public function menuList($id)
    {
        $restaurant = Cache::remember('restaurant_' . $id, 3600, function () use ($id) {
            return Restaurant::whereId($id)->with('menus')->first();
        });
        return view('menu', compact('restaurant'));
    }
}
