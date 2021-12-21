<?php

namespace App\Http\Controllers\Admin;

use App\Models\Blog;
use App\Models\Food;
use App\Models\User;
use App\Models\Package;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    public function index(){
        $data['user'] = User::all()->count();
        $data['food'] = Food::all()->count();
        $data['packages'] = Package::all()->count();
        $data['restaurants'] = Restaurant::all()->count();
        $data['blogs'] = Blog::all()->count();
        return view('admin.index', $data);
    }

    
}
