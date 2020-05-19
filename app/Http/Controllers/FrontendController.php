<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home');
    }
    public function books()
    {
        return view('frontend.books');
    }
    public function book()
    {
        return view('frontend.book');
    }
    // public function deposit()
    // {
    //     return view('frontend.deposit');
    // }
    public function donation()
    {
        return view('frontend.donation');
    }

    
    public function about()
    {
        return view('frontend.about');
    }
    
    public function product()
    {
        return view('frontend.product');
    }
    public function checkout()
    {
        return view('frontend.checkout');
    }
    public function payment()
    {
        return view('frontend.payment');
    }
    public function orderinfo()
    {
        return view('frontend.orderinfo');
    }
   
    public function school()
    {
        return view('frontend.school');
    }
    public function plustwo()
    {
        return view('frontend.plustwo');
    }
    public function alevel()
    {
        return view('frontend.alevel');
    }
    public function comics()
    {
        return view('frontend.comics');
    }

    
}
