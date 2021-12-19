<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'role' => 3,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));
        Notify::success("Your registration Successfully Done", 'Success');
        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
    
    public function vendor(){
        return view('auth.vendor_register');
    }
    
    public function vendorregister(Request $request)
    {
        $request->validate([
            'res_name' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'string', 'max:20', 'unique:users'],
            'trade_license' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'location' => ['required', 'string', 'max:255'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'res_name' => $request->res_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'trade_license' => $request->trade_license,
            'country' => $request->country,
            'city' => $request->city,
            'location' => $request->location,
            'role' => 2,
            'password' => Hash::make($request->password),
        ]);
    
        event(new Registered($user));
        Notify::success("Your Restaurant Successfully Registered", 'Success');
        Auth::login($user);
    
        return redirect(RouteServiceProvider::HOME);
    }
    
}
