<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Food;
use App\Models\Billing;
use App\Models\Package;
use App\Models\Category;
use App\Models\Subscribe;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use Gloudemans\Shoppingcart\Facades\Cart;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['categories'] = Category::inRandomOrder()->limit(16)->get();
        $data['foods'] = Food::all();
        $data['packages'] = Package::limit(3)->get();
        $data['default_blogs'] = Blog::orderBy('id', 'asc')->first();
        $data['blogs'] = Blog::where('status', 1)->inRandomOrder()->limit(3)->get();
        return view('index', $data);
    }

    public function aboutus(){
        return view('aboutus');
    }

    public function blogdetails($slug){
        $data['blog_details'] = Blog::where('slug', $slug)->firstOrFail();
        $data['latest_blog'] = Blog::latest()->limit(2)->get();
        return view('blog_details', $data);
    }

    public function contactus(){
        return view('contactus');
    }

    public function planingevent(){
        $data['default_blogs'] = Blog::orderBy('id', 'asc')->first();
        $data['blogs'] = Blog::where('status', 1)->inRandomOrder()->limit(3)->get();
        return view('planing_event', $data);
    }

    public function priceplan(){
        $data['all_packages'] = Package::latest()->get();
        $data['default_blogs'] = Blog::orderBy('id', 'asc')->first();
        $data['blogs'] = Blog::where('status', 1)->inRandomOrder()->limit(3)->get();
        return view('price_plan', $data);
    }

    public function searchresult(){
        $data['restaurants'] = Restaurant::where('status', 1)->inRandomOrder()->limit(20)->get();
        $data['bestfoods'] = Food::inRandomOrder()->limit(4)->get();
        $data['default_blogs'] = Blog::orderBy('id', 'asc')->first();
        $data['blogs'] = Blog::where('status', 1)->inRandomOrder()->limit(3)->get();
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
            Notify::success('This email already subscribed our newsletter', 'Subscriber');
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


    public function checkout()
    {
        $cart = Cart::count();
        if ($cart < 1) {
            Notify::error('Your cart is empty, add Food first', 'error');
            return back();
        }

        if (!Auth::user()) {
            Notify::error('Login first !', 'error');
            return redirect()->route('login');
        }

        $data['countb']  = Billing::where('user_id', Auth::user()->id)->count();
        $data['billing'] = Billing::where('user_id', Auth::user()->id)->first();


        return view('checkout', $data);
    }



}
