<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $restaurants = Cache::remember('restaurants', 3600, function () {
            return Restaurant::orderBy('id', 'desc')->get();
        });
        return view('welcome', compact('restaurants'));
    }
}
