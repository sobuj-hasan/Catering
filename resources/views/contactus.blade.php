@extends('layouts.catering_app')
@section('title')
    Contact Us
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-two contact-us-banner">
        <div class="overlay">
            <div class="container py-2">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>@lang('home.lets_know')</h4>
                        <h2 class="section-header after-before">@lang('home.contactus')</h2>
                        <div class="after-design">
                            <i style="color: #FFC672;" class="fas fa-circle fs-4"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER TWO PART END -->

    <section class="about-contact address py-5">
        <div class="container clearfix">
            <div class="row py-5 justify-content-between section-content">
                <div class="col-sm-5">
                    <h3>@lang('home.call_us')</h3>
                    <p class="paragraph mt-4">@lang('home.callus_article')</p>
                    <p class="paragraph mb-0"><b>@lang('home.phone_value')</b></p>
                    <p><b>@lang('home.email_value')</b></p>
                </div>
                <div class="col-sm-5">
                    <h3>@lang('home.our_office')</h3>
                    <p class="paragraph mt-4">@lang('home.our_office_article')</p>
                    <p class="mt-3">@lang('home.country_location')</p>
                </div>
            </div>
        </div>
        <div class="container contact mt-5">
            <form method="GET" action="{{ route('contact.message') }}">
            @csrf
                <div class="row p-3 p-md-5 mt-2 mt-sm-0">
                    <div class="col-12 text-center mb-5">
                        <h4>@lang('home.form_article')</h4>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">@lang('home.honored_by_name')</label>
                            <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">@lang('home.email_address')</label>
                            <input type="text" class="form-control" value="{{ old('email') }}" name="@lang('home.email_address')">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">@lang('home.landline_phone') </label>
                            <input type="text" class="form-control" value="{{ old('phone') }}" name="phone">
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">@lang('home.what_do_your_inquire')</label>
                            <input type="text" class="form-control" value="{{ old('subject') }}" name="subject">
                            @error('subject')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">@lang('home.what_programm_are_you_interested')</label>
                            <input type="text" class="form-control" value="{{ old('profession') }}" name="profession">
                            @error('profession')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-4">
                            <label for="name" class="form-label">@lang('home.your_address')</label>
                            <input type="text" class="form-control" value="{{ old('city') }}" name="city">
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-2">
                            <textarea style="height: 175px;" rows="5" class="form-control" placeholder="@lang('home.what_do_you_need')" name="message">{{ old('message') }}</textarea>
                            @error('message')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
        
                    <div class="col">
                        <button type="submit">@lang('home.send_message')</button>
                    </div>
                </div>
            </form>
        </div>
        <br>
    </section>
    
    <!-- Map start -->
    <section class="map py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="pb-3">@lang('home.google_map')</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.2835191560466!2d39.21701581397685!3d21.57485347428898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1730ac2c1f7%3A0x13a1d2b048ec9be8!2sMasjid%20Ash%20Shakrin%2C%20Al-Safa%2C%20Jeddah%2023453%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sbd!4v1632650648639!5m2!1sen!2sbd"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map end -->
@endsection


















