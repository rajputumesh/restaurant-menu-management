<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Providers\RouteServiceProvider;
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


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required',
        ]);
        $success = auth()->attempt([
            'email' => request('email'),
            'password' => request('password')
        ], request()->has('remember'));

        session(['last_active' => now()]);
        if ($success) {
            return redirect()->to(RouteServiceProvider::HOME);
        }
        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ]);
    }
}
