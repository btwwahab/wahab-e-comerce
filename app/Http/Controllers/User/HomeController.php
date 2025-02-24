<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function home()  {

        $featuredCategories = Category::where('status' , 1)->get();

        $featuredProducts = Product::where('status' , 1)->latest()->take(8)->get();

        return view('frontend.home' , compact('featuredCategories' , 'featuredProducts'));
    }

    public function shop() {
        return view('frontend.shop');
    }

    public function account() {
        $user = Auth::user();
        return view('frontend.accounts' , compact('user'));
    }

    public function compare() {
        return view('frontend.compare');
    }

    public function wishlist() {
        return view('frontend.wishlist');
    }

    public function cart() {
        return view('frontend.cart');
    }

    public function checkout() {
        return view('frontend.checkout');
    }

    public function productDetail() {
        return view('frontend.details');
    }

}
