@extends('layouts.catering_app')
@section('title')
    About Us
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-two about-us-banner">
        <div class="overlay">
            <div class="container py-5">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>@lang('home.lets_know')</h4>
                        <h2 class="section-header after-before">@lang('home.aboutus')</h2>
                        <div class="after-design">
                            <i style="color: #FFC672;" class="fas fa-circle fs-6"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER TWO PART END -->

    <!-- KNOW ABOUT START -->
    <section class="know-about my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <img class="pt-4" width="92%" src="assets/img/photos/about-us-page.png" alt="about-us">
                    <p class="paragraph py-5 pe-5">@lang('home.what_we_do_text6')</p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 py-4">
                    <h4>@lang('home.know_aboutus')</h4>
                    <h2 class="section-header">@lang('home.what_we_do')</h2>
                    <p class="paragraph">@lang('home.what_we_do_text')</p>
                    <p class="paragraph">@lang('home.what_we_do_text2')</p>
                    <p class="paragraph">@lang('home.what_we_do_text3')</p>
                    <p class="paragraph">@lang('home.what_we_do_text4')</p>
                    <p class="paragraph">@lang('home.what_we_do_text5')</p>
                    <p class="paragraph">@lang('home.what_we_do_text6')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- KNOW ABOUT END -->

    <!-- WHY WE DEFFERENT -->
    <section class="know-about my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <h4>@lang('home.know_aboutus')</h4>
                    <h2 class="section-header">@lang('home.what_we_are_defferents')</h2>
                    <p class="paragraph">@lang('home.what_we_are_defferents_text')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- WHY WE DEFFERENT -->
@endsection









