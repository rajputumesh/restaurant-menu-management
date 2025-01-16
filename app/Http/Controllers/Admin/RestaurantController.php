<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class RestaurantController extends Controller
{
    public function index()
    {
        $items = Cache::remember('restaurants', 3600, function () {
            return Restaurant::all();
        });
        return view('admin.restaurant.index', compact('items'));
    }

    public function create()
    {
        return view('admin.restaurant.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        $restaurant =  new Restaurant;
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->mobile = $request->mobile;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/restaurants', $imageName);
            $restaurant->image = $imageName;
        }
        $restaurant->save();
        Cache::forget('restaurants');
        return redirect()->route('restaurant.index')->with('success', 'Restaurant Created Successfully');
    }

    public function edit($id)
    {
        $item = Restaurant::find($id);
        return view('admin.restaurant.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'mobile' => 'required',
        ]);
        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->name;
        $restaurant->address = $request->address;
        $restaurant->mobile = $request->mobile;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/restaurants', $imageName);
            $restaurant->image = $imageName;
        }
        $restaurant->save();
        Cache::forget('restaurants');
        return redirect()->route('restaurant.index')->with('success', 'Restaurant Edited Successfully');
    }

    public function destroy($id)
    {
        $restaurant = Restaurant::find($id);
        $restaurant->delete();
        Cache::forget('restaurants');
        return redirect()->route('restaurant.index')->with('success', 'Restaurant Deleted Successfully');
    }
}
