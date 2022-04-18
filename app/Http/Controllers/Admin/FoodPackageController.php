<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Package;
use App\Models\Restaurant;
use App\Models\PackageItems;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class FoodPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['packages'] = Package::all();
        return view('admin.food_package.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['restaurants'] = Restaurant::where('user_id', Auth::user()->id)->get();
        return view('admin.food_package.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'restaurant_id' => 'required|numeric',
            'name' => 'required|string',
            'price' => 'required|integer',
            'time' => 'required',
            'image' => 'required',
            // 'items[]' => 'required',
        ]);
        $package = Package::create($request->except('_token', 'image', 'items[]') + [
            'user_id' => Auth::user()->id,
        ]);
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $photo_name = time() . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/food/' . $photo_name;

            Image::make($photo)->save($location);
            Package::find($package->id)->update([
                'image' => $photo_name,
            ]);
        }
        foreach($request->items as $item){
            PackageItems::insert([
                'package_id' => $package->id,
                'items' => $item,
                'created_at' => Carbon::now()
            ]);
        }
        Notify::success('Created a new Package !', 'Success');
        return redirect()->route('package.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['single_package'] = Package::where('id', $id)->firstOrFail(); 
        return view('admin.food_package.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['restaurants'] = Restaurant::where('user_id', Auth::user()->id)->get();
        return view('admin.food_package.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
