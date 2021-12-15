<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class SpecialCateringGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.special_catering.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin.special_catering.add', $data);
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
            'category' => 'required|numeric',
            'title' => 'required|min:3|max:30',
            'short_description' => 'required|max:100',
            'price' => 'required',
            'image' => 'required|image',
        ]);

        // $slug = Str::slug($request->name) . '-' . Str::random(5);
        // $product->update($request->except('image', 'image_name') + [
        //     'slug' => $slug,
        // ]);

        // if ($request->hasFile('image')) {
        //     if ($product->image) {
        //         unlink(public_path('safety_assets/img/products/' . $product->image));
        //     }

        //     $uploaded_photo = $request->file('image');
        //     $photo_name = time() . "." . $uploaded_photo->getClientOriginalExtension($uploaded_photo);
        //     $new_photo_location = 'safety_assets/img/products/' . $photo_name;

        //     Image::make($uploaded_photo)->save(public_path($new_photo_location));
        //     $product->update([
        //         'image' => $photo_name
        //     ]);
        // }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
