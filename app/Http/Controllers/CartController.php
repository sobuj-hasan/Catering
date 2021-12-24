<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Package;
use App\Models\Product;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart;


class CartController extends Controller
{

    public function addtocart(Request $request)
    {
        if (Cart::content()->where('weight', 1)->count() > 0) {
            Cart::destroy();
        }

        $product_id = $request->product_id;
        $product = Food::find($product_id);

        $data['qty']    = 1;
        $data['id']     = $product_id;
        $data['name']   = $product->title;
        $data['price']  = $product->price;
        $data['discount']  = $product->discount;
        $data['size'] = 'Full';
        $data['weight'] = '2';
        $data['options']['image'] = $product->image;

        Cart::add($data);

        return response()->JSON();
    }

    public function cartdestry($rowId)
    {
        Cart::remove($rowId);
        Notify::info('Product deleted from cart', 'Deleted');
        return back();
    }
    

    public function packageaddtocart(Request $request)
    {
        if (Cart::content()->where('weight', 2)->count() > 0) {
            Cart::destroy();
        }

        $package_id = $request->package_id;
        $package = Package::find($package_id);

        $data['qty']    = 1;
        $data['id']     = $package_id;
        $data['name']   = $package->name;
        $data['price']  = $package->price;
        $data['weight'] = '1';
        $data['options']['size']  = $package->time;
        $data['options']['image'] = $package->image;

        Cart::add($data);

        return response()->JSON();
    }

    public function cartproductcount()
    {
        return view('cartcomponents.count');
    }

    public function cartcontent()
    {
        return view('cartcomponents.cartcontent');
    }

    public function cartsummary()
    {
        return view('cartcomponents.cartsummary');
    }


}
