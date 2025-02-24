<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\FuncCall;

class HomeController extends Controller
{
    public function home()  {

        

        return view('frontend.home');
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
