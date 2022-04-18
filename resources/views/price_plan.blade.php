@extends('layouts.catering_app')
@section('title')
    Price Plan
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-two">
        <div class="overlay">
            <div class="container py-2">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>@lang('home.limited_office')</h4>
                        <h2 class="section-header after-before">@lang('home.choose_catering_plan')</h2>
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
            <div class="row justify-content-center">
                @foreach ($all_packages as $package)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="package">
                            <div class="card text-center my-4">
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
                @endforeach
            </div>
        </div>
    </section>
    <!-- PRICE PLAN END -->

    <!-- DESCOUNT BANNER STAR -->
    @include('catering_components.discount_banner');
    <!-- DESCOUNT BANNER END -->

    <!-- LATEST BLOG START -->

    @include('catering_components.latest_blog')

    <!-- LATEST BLOG END -->
@endsection