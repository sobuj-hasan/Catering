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
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/package1.jpg') }});">
                                <div class="package-pricing">
                                    <h4 class="">Package 01</h4>
                                    <h3 class="section-header">$ 49.50/<span>Day</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> 02 Meals </p>
                                <p class="paragraph"> 01 Soup </p>
                                <p class="paragraph"> 01 Sneak </p>
                                <p class="paragraph"> 02 Cold Drick </p>
                                <p class="paragraph"> Free Delivery </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/package2.jpg') }});">
                                <div class="package-pricing">
                                    <h4 class="">Package 02</h4>
                                    <h3 class="section-header">$ 200/<span>Week</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> 03 Meals </p>
                                <p class="paragraph"> 02 Soup </p>
                                <p class="paragraph"> 02 Sneak </p>
                                <p class="paragraph"> 03 Cold Drick </p>
                                <p class="paragraph"> 01 Fruits Juice </p>
                                <p class="paragraph"> 01 Hot Meal </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/package3.jpg') }});">
                                <div class="package-pricing">
                                    <h4 class="">Package 03</h4>
                                    <h3 class="section-header">$ 700/<span>Month</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> Full Meals </p>
                                <p class="paragraph"> Luxuary Soup </p>
                                <p class="paragraph"> Luxury Sneak </p>
                                <p class="paragraph"> Unlimited Cold Drick </p>
                                <p class="paragraph"> Multiple-choose </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/double-package.png') }});">
                                <div class="package-pricing">
                                    <h4 class="">Double Package</h4>
                                    <h3 class="section-header">$ 99/<span>Month</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> Full Meals </p>
                                <p class="paragraph"> Luxuary Soup </p>
                                <p class="paragraph"> Luxury Sneak </p>
                                <p class="paragraph"> Unlimited Cold Drick </p>
                                <p class="paragraph"> Multiple-choose </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/corporate-package.png') }});">
                                <div class="package-pricing">
                                    <h4 class="">Corporate Package</h4>
                                    <h3 class="section-header">$ 200/<span>Month</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> Full Meals </p>
                                <p class="paragraph"> Luxuary Soup </p>
                                <p class="paragraph"> Luxury Sneak </p>
                                <p class="paragraph"> Unlimited Cold Drick </p>
                                <p class="paragraph"> Multiple-choose </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/keto-diet-package.png') }});">
                                <div class="package-pricing">
                                    <h4 class="">Keto Diet Package</h4>
                                    <h3 class="section-header">$ 700/<span>Month</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> Full Meals </p>
                                <p class="paragraph"> Luxuary Soup </p>
                                <p class="paragraph"> Luxury Sneak </p>
                                <p class="paragraph"> Unlimited Cold Drick </p>
                                <p class="paragraph"> Multiple-choose </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/Healthy-package.png') }});">
                                <div class="package-pricing">
                                    <h4 class="">Healthy Package</h4>
                                    <h3 class="section-header">$ 99/<span>Month</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> Full Meals </p>
                                <p class="paragraph"> Luxuary Soup </p>
                                <p class="paragraph"> Luxury Sneak </p>
                                <p class="paragraph"> Unlimited Cold Drick </p>
                                <p class="paragraph"> Multiple-choose </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/ramadan-package.png') }});">
                                <div class="package-pricing">
                                    <h4 class="">Ramadan Package</h4>
                                    <h3 class="section-header">$ 200/<span>Month</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> Full Meals </p>
                                <p class="paragraph"> Luxuary Soup </p>
                                <p class="paragraph"> Luxury Sneak </p>
                                <p class="paragraph"> Unlimited Cold Drick </p>
                                <p class="paragraph"> Multiple-choose </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                    <div class="package">
                        <div class="card text-center my-4">
                            <div class="card-header price-plan-img p-0" style="background-image: url({{ asset('assets/img/food/body-build-package.png') }});">
                                <div class="package-pricing">
                                    <h4 class="">BodyBuild Package</h4>
                                    <h3 class="section-header">$ 700/<span>Month</span> </h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p class="paragraph mt-3"> Full Meals </p>
                                <p class="paragraph"> Luxuary Soup </p>
                                <p class="paragraph"> Luxury Sneak </p>
                                <p class="paragraph"> Unlimited Cold Drick </p>
                                <p class="paragraph"> Multiple-choose </p>
                                <p class="paragraph"> 24/7 Services </p>
                            </div>
                            <div class="card-footer py-3">
                                <a href="#">Select Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
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