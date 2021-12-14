<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        return view('index');
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function blogdetails(){
        return view('blog_details');
    }

    public function contactus(){
        return view('contactus');
    }

    public function planingevent(){
        return view('planing_event');
    }

    public function priceplan(){
        return view('price_plan');
    }

    public function searchresult(){
        return view('search_result');
    }

    public function cart()
    {
        return view('cart');
    }



}
