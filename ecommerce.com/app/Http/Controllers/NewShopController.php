<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewShopController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }

    public function categoryProduct(){
        return view('front-end.category-product.products');
    }

    public function categoryProductTwo(){
        return view('front-end.category-product.product-two');
    }

    public function shortCodes(){
        return view('front-end.short-codes.short-codes');
    }

    public function mailUs(){
        return view('front-end.mail-us.mail-us');
    }

    public function login(){
        return view('front-end.login.login');
    }

    public function register(){
        return view('front-end.register.register');
    }

    public function checkout(){
        return view('front-end.checkout.checkout');
    }
}
