<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        return view('frontend.accounts');
    }

    public function compare() {
        return view('frontend.compare');
    }

    public function authentication() {
        return view('frontend.auth.login-register');
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
        return view('frontend.detail');
    }

}
