<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use App\Models\Subscribe;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['categories'] = Category::all();
        $data['foods'] = Food::all();
        return view('index', $data);
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
        $data['restaurants'] = Restaurant::where('status', 1)->inRandomOrder()->limit(20)->get();
        $data['bestfoods'] = Food::inRandomOrder()->limit(4)->get();
        return view('search_result', $data);
    }

    public function cart()
    {
        return view('cart');
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);
        $subscribe = Subscribe::where('email', $request->email)->count();
        if ($subscribe != 0) {
            Notify::error('This email address already exists', 'Error');
            return back();
        }
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Subscribe::create($request->except('_token') + [
                'user_id' => $user_id,
            ]);
        } else {
            Subscribe::create($request->except('_token'));
        }
        Notify::success('Successfully Subscribed our newslatter', 'Congrats, Dear');
        return back();
    }

    public function contactmessage(Request $request)
    {
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'profession' => 'required',
            'city' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message successfully Submited', 'Success');
        return back();
    }



}
