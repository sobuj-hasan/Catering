<?php
namespace App\Http\Controllers\Vendor;
use App\Models\Food;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class SpecialCateringGoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['foods'] = Food::all();
        return view('admin.foods.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        $data['restaurants'] = Restaurant::where('user_id', Auth::user()->id)->get();
        return view('admin.foods.add', $data);
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
            'category_id' => 'required|numeric',
            'title' => 'required|min:3|max:30',
            'short_description' => 'required|min:10|max:100',
            'price' => 'required',
            'discount' => '',
            'image' => 'required',
        ]);
        $slug = Str::slug($request->title) . '-' . Str::random(5);
        $food = Food::create($request->all() + [
            'user_id' => Auth::user()->id,
            'slug' => $slug,
        ]);
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $photo_name = time() . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/food/' . $photo_name;

            Image::make($photo)->save($location);
            Food::find($food->id)->update([
                'image' => $photo_name,
            ]);
        }
        Notify::success('Created a new food !', 'Success');
        return redirect()->route('catering.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['single_food'] = Food::where('id', $id)->firstOrFail();
        return view('admin.foods.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['food'] = Food::where('id', $id)->firstOrFail();
        $data['categories'] = Category::all();
        $data['restaurants'] = Restaurant::where('user_id', Auth::user()->id)->get();
        return view('admin.foods.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        $request->validate([
            'restaurant_id' => 'required|numeric',
            'category_id' => 'required|numeric',
            'title' => 'required|min:3|max:30',
            'short_description' => 'required|min:10|max:100',
            'price' => 'required',
            'discount' => '',
            'image' => '',
        ]);

        $slug = Str::slug($request->title) . '-' . Str::random(5);
        $food->update($request->except('_token','image') + [
            'user_id' => Auth::user()->id,
            'slug' => $slug,
        ]);

        if ($request->hasFile('image')) {
            if ($food->image) {
                unlink('assets/img/food/' . $food->image);
            }
            $photo = $request->file('image');
            $photo_name = time() . "." . $photo->getClientOriginalExtension($photo);
            $location = 'assets/img/food/' . $photo_name;
            Image::make($photo)->save($location);
            $food->image = $photo_name;
        }
        Notify::success('Food have been updated!', 'Success');
        return redirect()->route('catering.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Food::where('id', $id)->first()->delete();
        Notify::info('This Food Successfully Deleted', 'Deleted');
        return back();
    }
}
