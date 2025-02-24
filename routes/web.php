<?php

use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;


// User site Auth Routes
Route::namespace('Auth')->group(function() {

    Route::get('/register-page' , [AuthController::class , 'showUserLoginForm'])->name('login-signup');
    Route::post('/login' , [AuthController::class , 'userLogin'])->name('user-login');
    Route::post('/register' , [AuthController::class , 'userRegister'])->name('user-register');
    Route::post('/logout' , [AuthController::class , 'userLogout'])->name('user-logout');

});


// Frontend pages routes on user site
Route::namespace('User')->group(function () {

    Route::get('/' , [HomeController::class, 'home'])->name('home');

    Route::get('shop' , [HomeController::class , 'shop'])->name('shop');
    Route::get('account' , [HomeController::class , 'account'])->name('account');
    Route::get('compare' , [HomeController::class , 'compare'])->name('compare');
    Route::get('wishlist' , [HomeController::class , 'wishlist'])->name('wishlist');
    Route::get('cart' , [HomeController::class , 'cart'])->name('cart');
    Route::get('checkout' , [HomeController::class , 'checkout'])->name('checkout');
    Route::get('detail' , [HomeController::class , 'productDetail'])->name('detail');

});