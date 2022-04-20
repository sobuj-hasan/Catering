<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Admin;
namespace App\Http\Controllers\User;
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view(route('index'));
});

    // Fontend Controller Routes
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('aboutus', [FrontendController::class, 'aboutus'])->name('aboutus');
    Route::get('blog/details/{slug}', [FrontendController::class, 'blogdetails'])->name('blog.details');
    Route::get('contactus', [FrontendController::class, 'contactus'])->name('contactus');
    Route::get('planing/event', [FrontendController::class, 'planingevent'])->name('planing.event');
    Route::get('service/request', [FrontendController::class, 'service_request'])->name('service.request');
    Route::post('service/request/post', [FrontendController::class, 'service_request_post'])->name('service.request.post');
    Route::get('price/plan', [FrontendController::class, 'priceplan'])->name('price.plan');
    Route::get('our/restaurants', [FrontendController::class, 'restaurant'])->name('restaurant');
    Route::get('search/result', [FrontendController::class, 'searchresult'])->name('search.result');
    Route::get('restaurant/foods/{id}', [FrontendController::class, 'restaurant_foods'])->name('restaurant.foods');
    Route::get('subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');
    Route::get('contact/message', [FrontendController::class, 'contactmessage'])->name('contact.message');
    Route::get('cart', [FrontendController::class, 'cart'])->name('cart');
    Route::get('checkout', [FrontendController::class, 'checkout'])->name('checkout');

    Route::post('addtocart', [CartController::class, 'addtocart'])->name('add.to.cart');
    Route::get('cartdestry/{rowId}', [CartController::class, 'cartdestry'])->name('cart.destry');
    Route::post('package/add/to/cart', [CartController::class, 'packageaddtocart'])->name('package.add.to.cart');

    Route::get('cart/product/count', [CartController::class, 'cartproductcount'])->name('cart.count');
    Route::get('cart/content', [CartController::class, 'cartcontent'])->name('cart.content');
    Route::get('cart/summary', [CartController::class, 'cartsummary'])->name('cart.summary');
    Route::post('order/store', [OrderController::class, 'store'])->name('order.store');


    // Vendor register route
    Route::get('vendor/register', [RegisteredUserController::class, 'vendor'])->name('vendor');
    Route::post('vendor/register/submit', [RegisteredUserController::class, 'vendorregister'])->name('vendor.register');

    // User Dashboard Routes
    Route::group(
        ['namespace' => 'User', 'middleware' => 'auth'],
        function () {
            Route::get('dashboard', 'DashboardController@index')->name('dashboard');
            Route::get('dashboard/restrict/user', 'DashboardController@restrictuser')->name('dashboard.restrict.user');
            // Route::get('user/logout', 'UserDashboardController@logout')->name('logout');
            Route::resources([
                // 'myorder' => 'OrderShowController',
                // 'transection' => 'TransectionController',
                // 'myorder' => 'UserOrderController',
            ]);

            // Route::get('user/profile', 'UserProfileController@index')->name('user.profile');
            // Route::get('user/profile/edit', 'UserProfileController@edit')->name('user.profile.edit');
            // Route::post('user/profile/update', 'UserProfileController@update')->name('user.profile.update');
            // Route::get('user/setting', 'UserProfileController@setting')->name('user.setting');
            // Route::post('user/setting/update', 'UserProfileController@changepassword')->name('user.setting.update');
        }
    );

    // Vendor Panel all Routes
    Route::group(
        ['namespace' => 'Vendor', 'middleware' => 'vendor'],
        function () {
            Route::get('vendor/dashboard', 'DashboardController@index')->name('vendor.dashboard');
            Route::resources([
                'vendorrestaurant' => 'RestaurantController',
                'special/foods/vendorcatering' => 'SpecialCateringGoodsController',
                'food/vendorpackage' => 'FoodPackageController',
                'vendorcategories' => 'CategoryController',
                // 'myorder' => 'OrderShowController',
                // 'transection' => 'TransectionController',
                // 'myorder' => 'UserOrderController',
            ]);
            
            // Route::get('user/profile', 'UserProfileController@index')->name('user.profile');
            // Route::get('user/profile/edit', 'UserProfileController@edit')->name('user.profile.edit');
            // Route::post('user/profile/update', 'UserProfileController@update')->name('user.profile.update');
            // Route::get('user/setting', 'UserProfileController@setting')->name('user.setting');
            // Route::post('user/setting/update', 'UserProfileController@changepassword')->name('user.setting.update');
        }
    );




require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
