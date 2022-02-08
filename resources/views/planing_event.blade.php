@extends('layouts.catering_app')
@section('title')
    Planing Events
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-two planing-event-banner">
        <div class="overlay">
            <div class="container py-5">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>@lang('home.our_services')</h4>
                        <h2 class="section-header after-before">@lang('home.planing_event')</h2>
                        <div class="after-design">
                            <i style="color: #FFC672;" class="fas fa-circle fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER TWO PART END -->

    <!-- PLANING EVENTS START -->
    <section class="planing-events my-5">
        <div class="container">
            <div class="row pt-4">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pb-5">
                    <img width="90%" src="{{ asset('assets/img/food/wedding-catering.png') }}" alt="event-img">
                    <h5 class="py-4 pe-5">@lang('home.event_one_title') </h5>
                    <p class="paragraph pe-5">@lang('home.event_one_text')</p>
                    <div class="readmore mt-lg-4 mt-md-4 mt-sm-2">
                        <a class="readmore-btn" href="">@lang('home.read_more')</a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pb-5">
                    <img width="90%" src="{{ asset('assets/img/food/picnic-tour-and-event-catering.png') }}" alt="event-img">
                    <h5 class="py-4 pe-5">@lang('home.event_two_title')</h5>
                    <p class="paragraph pe-5">@lang('home.event_two_text')</p>
                    <div class="readmore mt-lg-4 mt-md-4 mt-sm-2">
                        <a class="readmore-btn" href="">@lang('home.read_more')</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pb-5">
                    <img width="90%" src="{{ asset('assets/img/food/corporate-program-catering.png') }}" alt="event-img">
                    <h5 class="py-4 pe-5">@lang('home.event_three_title')</h5>
                    <p class="paragraph pe-5">@lang('home.event_three_text')</p>
                    <div class="readmore mt-lg-4 mt-md-4 mt-sm-2">
                        <a class="readmore-btn" href="">@lang('home.read_more')</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pb-5">
                    <img width="90%" src="{{ asset('assets/img/food/festival-event-catering.png') }}" alt="event-img">
                    <h5 class="py-4 pe-5">@lang('home.event_four_title')</h5>
                    <p class="paragraph pe-5">@lang('home.event_four_text')</p>
                    <div class="readmore mt-lg-4 mt-md-4 mt-sm-2">
                        <a class="readmore-btn" href="">@lang('home.read_more')</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pb-5">
                    <img width="90%" src="{{ asset('assets/img/food/private-program-catering.png') }}" alt="event-img">
                    <h5 class="py-4 pe-5">@lang('home.event_five_title')</h5>
                    <p class="paragraph pe-5">@lang('home.event_five_text')</p>
                    <div class="readmore mt-lg-4 mt-md-4 mt-sm-2">
                        <a class="readmore-btn" href="">@lang('home.read_more')</a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 pb-5">
                    <img width="90%" src="{{ asset('assets/img/food/social-event-catering.png') }}" alt="event-img">
                    <h5 class="py-4 pe-5">@lang('home.event_six_title')</h5>
                    <p class="paragraph pe-5">@lang('home.event_six_text')</p>
                    <div class="readmore mt-lg-4 mt-md-4 mt-sm-2">
                        <a class="readmore-btn" href="">@lang('home.read_more')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- PLANING EVENTS END -->

    <!-- DESCOUNT BANNER STAR -->
    @include('catering_components.discount_banner');
    <!-- DESCOUNT BANNER END -->
    
    <!-- LATEST BLOG START -->
    @include('catering_components.latest_blog')
    <!-- LATEST BLOG END -->
@endsection









