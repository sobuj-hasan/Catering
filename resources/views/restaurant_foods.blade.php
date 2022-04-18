@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.catering_app')
@section('title')
    Restaurant Foods
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-two">
        <div class="overlay">
            <div class="container">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>{{ $restaurants->address }}, {{ $restaurants->city }}, {{ $restaurants->country }}</h4>
                        <h2 class="section-header after-before">{{ $restaurants->res_name }}</h2>
                        <div class="after-design">
                            <i style="color: #FFC672;" class="fas fa-circle fs-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER TWO PART END -->

    <!-- PRICE PLAN START -->
    <section class="price-plan my-sm-3 my-lg-5">
        <div class="container text-center py-4">
            <div class="row">
                <div class="col-lg-12 text-start mb-sm-3 mb-lg-5 best-items">
                    <h4>@lang('home.best_food_packages') </h4><hr class="best-item">
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($restaurant_package as $package)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
                        <div class="package">
                            <div class="card text-center my-2">
                                <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/') }}/{{ $package->image }});">
                                    <div class="package-pricing">
                                        <h4 class="">{{ $package->name }}</h4>
                                        <h3 class="section-header">@lang('home.currency') {{ $package->price }}/<span>{{ $package->time }}</span> </h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @foreach (App\Models\PackageItems::where('package_id', $package->id)->get() as $package_items)
                                        <p class="paragraph mt-3"> {{ $package_items->items }} </p>
                                    @endforeach
                                </div>
                                <div class="d-flex justify-content-center">
                                    <div class="btn-left">
                                        <a class="package_id" data-id="{{ $package->id }}" href="#">
                                            <img src="{{ asset('assets/img/icon/shoping-cart.png') }}" alt="">
                                            @lang('home.add_to_cart')
                                        </a>
                                    </div>
                                    <div class="btn-right text-center">
                                        <a href="">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                            customize package
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <span class="text-danger">Nothin to show any food packages for this restaurant...</span>
                @endforelse
            </div>
        </div>
    </section>
    <!-- PRICE PLAN END -->

    <!-- SPECIAL CATERING START  -->
    <section class="special-catering pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-start mb-sm-3 mb-lg-5 best-items">
                    <h4>@lang('home.our_foods') </h4><hr class="best-item">
                </div>
            </div>
            <div class="row restaurant_foods">
                @forelse ($restaurant_foods as $restaurant_food)
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center mb-sm-3 mb-lg-5 restaurant_food_item">
                        <div class="catering-item">
                            <div class="offer">
                                <img class="mx-auto d-block" src="{{ asset("assets/img/food") }}/{{ $restaurant_food->image }}" alt="food-img">
                                <div class="discount">
                                    <h4>25% Off</h4>
                                </div>
                            </div>
                            <h4>{{ $restaurant_food->title }}</h4>
                            <p class="paragraph pt-2 ps-2 pe-2">{{ $restaurant_food->short_description }}</p>
                            <h4 class="price">{{ $restaurant_food->price }} @lang('home.currency')</h4>
                            <div class="add-cart mt-3 mb-5">
                                <button class="custom-btn product_id" data-id={{ $restaurant_food->id }} href="#">@lang('home.add_to_cart')</button>
                            </div>
                        </div>
                    </div>
                    @empty
                    <span class="text-danger text-center">Nothin to show any foods for this restaurant...</span>
                @endforelse
            </div>
        </div>
    </section>
    <!-- SPECIAL CATERING END  -->

    <!-- DESCOUNT BANNER STAR -->
    @include('catering_components.discount_banner');
    <!-- DESCOUNT BANNER END -->

    <!-- LATEST BLOG START -->

    @include('catering_components.latest_blog')

    <!-- LATEST BLOG END -->
@endsection
@section('footer_script')
    <script>
        $('.restaurant_foods').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            @if ($locale == 'ar')
                rtl: true,
            @else
                rtl: false,
            @endif
            autoplay: true,
            autoplaySpeed: 2000,
            dots: false,
            arrows: false,
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 350,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        });
    </script>
@endsection


