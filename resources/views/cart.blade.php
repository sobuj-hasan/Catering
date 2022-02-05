@extends('layouts.catering_app')
@section('title')
    Your Cart
@endsection
@section('body')
    <!-- CART SECTION START -->
    <div class="cart-section">
        <div class="container">
            <div class="cart-breadcrump my-5">
                <a href="{{ route('index') }}">@lang('home.home')</a> > <a href="{{ route('price.plan') }}">@lang('home.pricing')</a> > <a href="">@lang('home.cart_page')</a>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="billing-info">
                        <button type="submit">@lang('home.billing_information')</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 my-3">
                    <div class="table-responsive">
                        <div id="cartcontentshow">

                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 mt-2 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12">
                            <div class="coupon">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Coupon Code" aria-describedby="basic-addon2">
                                    <button class="input-group-text" id="basic-addon2">@lang('home.apply_coupon')</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 mt-2 mb-5 text-end">
                    <button class="custom-btn"> @lang('home.update_cart') </button>
                    <div id="cartsummaryshow">
                                        
                    </div>
                    <div class="process-btn d-flex justify-content-end mt-4 mb-4">
                        <a class="readmore-btn m-2" href="{{ route('index') }}">@lang('home.back_to_home')</a>
                        <a class="readmore-btn m-2" href="{{ route('checkout') }}">@lang('home.process_to_checkout')</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART SECTION END -->
@endsection
















