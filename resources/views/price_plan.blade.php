@extends('layouts.catering_app')
@section('title')
    Price Plan
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-two">
        <div class="overlay">
            <div class="container py-5">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>Limited offer</h4>
                        <h2 class="section-header after-before">Chooose Catering Plan</h2>
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
                @foreach ($all_packages as $package)
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="package">
                            <div class="card text-center my-4">
                                <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/') }}/{{ $package->image }});">
                                    <div class="package-pricing">
                                        <h4 class="">{{ $package->name }}</h4>
                                        <h3 class="section-header">$ {{ $package->price }}/<span>{{ $package->time }}</span> </h3>
                                    </div>
                                </div>
                                <div class="card-body">
                                    @foreach (App\Models\PackageItems::where('package_id', $package->id)->get() as $package_items)
                                        <p class="paragraph mt-3"> {{ $package_items->items }} </p>
                                    @endforeach
                                </div>
                                <div class="card-footer py-3">
                                    <a class="package_id" data-id="{{ $package->id }}" href="#">Add to Cart</a>
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
    <section class="discount-banner mb-sm-3 mb-lg-5">
        <div class="container-fluid">
            <div class="banner-img">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-sm-3 mt-lg-5">
                            <h4 class="mb-3 mt-5">Take a Chance</h4>
                            <h3>40% Discount for First Order</h3>
                            <h3>Or</h3>
                            <h3>Discuss your project</h3>
                            <div class="add-cart mt-5 mb-5">
                                <button class="custom-btn" href="">Send us request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DESCOUNT BANNER END -->

    <!-- LATEST BLOG START -->

    @include('catering_components.latest_blog')

    <!-- LATEST BLOG END -->
@endsection