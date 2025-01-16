<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FoodItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class FoodItemController extends Controller
{
    public function index(Request $request)
    {
        $items = Cache::remember('menus', 3600, function () use ($request) {
            return FoodItem::where('restaurant_id', $request->restaurant_id)->get();
        });
        return view('admin.menu.index', compact('items'));
    }

    public function create()
    {
        return view('admin.menu.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required',
            'name' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);
        $menu =  new FoodItem;
        $menu->restaurant_id = $request->restaurant_id;
        $menu->name = $request->name;
        $menu->price = $request->price ?? 0;
        $menu->description = $request->description ?? null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/menus', $imageName);
            $menu->image = $imageName;
        }
        $menu->save();
        Cache::forget('menus');
        return redirect()->route('menu.index', ['restaurant_id' => $request->restaurant_id])->with('success', 'Menu Created Successfully');
    }

    public function edit($id)
    {
        $item = FoodItem::find($id);
        return view('admin.menu.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'restaurant_id' => 'required',
            'name' => 'required',
            'price' => 'required',
        ]);
        $menu = FoodItem::find($id);
        $menu->restaurant_id = $request->restaurant_id;
        $menu->name = $request->name;
        $menu->price = $request->price ?? 0.00;
        $menu->description = $request->description ?? null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = uniqid() . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/menus', $imageName);
            $menu->image = $imageName;
        }
        $menu->save();
        Cache::forget('menus');
        return redirect()->route('menu.index', ['restaurant_id' => $request->restaurant_id])->with('success', 'Menu Edited Successfully');
    }

    public function destroy(Request $request, $id)
    {
        $menu = FoodItem::find($id);
        $menu->delete();
        Cache::forget('menus');
        return redirect()->route('menu.index', ['restaurant_id' => $request->restaurant_id])->with('success', 'Menu Deleted Successfully');
    }
}
