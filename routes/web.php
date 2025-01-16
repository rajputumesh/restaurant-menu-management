<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RestaurantController;
use App\Http\Controllers\Admin\FoodItemController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index']);
Route::get('restaurent/menu/{id}', [FrontendController::class, 'menuList'])->name('restaurent.menu');

Auth::routes();
Route::post('login', [HomeController::class, 'login']);

Route::group(['middleware' => ['auth', 'autoLogout']], function () {
    Route::get('home', [AdminController::class, 'index'])->name('home');
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard', [HomeController::class, 'index'])->name('home');
        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::resource('restaurant', RestaurantController::class);
        Route::resource('menu', FoodItemController::class);
    });
});

Route::fallback(function () {
    return view('404');
});
