<?php

use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Route;


// Frontend pages routes on user site
Route::namespace('User')->group(function () {

Route::get('/' , [HomeController::class, 'home'])->name('home');

Route::get('shop' , [HomeController::class , 'shop'])->name('shop');
Route::get('account' , [HomeController::class , 'account'])->name('account');
Route::get('compare' , [HomeController::class , 'compare'])->name('compare');
Route::get('login-signup' , [HomeController::class , 'authentication'])->name('login-signup');
Route::get('wishlist' , [HomeController::class , 'wishlist'])->name('wishlist');
Route::get('cart' , [HomeController::class , 'cart'])->name('cart');
Route::get('checkout' , [HomeController::class , 'checkout'])->name('checkout');
Route::get('detail' , [HomeController::class , 'productDetail'])->name('detail');

});