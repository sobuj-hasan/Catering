@extends('layouts.catering_app')
@section('title')
    Service Request 
@endsection
@section('body')
    <!-- CART SECTION START -->
    <div class="cart-section">
        <div class="container">
            <div class="cart-breadcrump my-5">
                <a href="{{ route('index') }}">@lang('home.home')</a> > <a href="{{ route('planing.event') }}">@lang('home.services')</a> > <a href="">Service Request</a>
            </div>
        </div>
    </div>
    <section id="booking-request" class="booking-request parking-valet my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-3 text-center">@lang('home.send_service_request')</h5>
                    <form method="POST" action="{{ route('service.request.post') }}">
                        @csrf
                        <div class="contact-form py-5">
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.full_name')" value="" name="name">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.contact_number')" value="" name="phone">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.email_address')" value="" name="email">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.your_country')" value="" name="country">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.your_city')" value="" name="city">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="@lang('home.your_address')" value="" name="address">
                                </div>
                                <div class="col-md-6 my-3">
                                    <input type="date" class="custom-control" placeholder="Service Date" value="" name="service_date">
                                </div>
                                <div class="col-md-6 my-3">
                                    <select class="custom-control" name="service_name">
                                        <option value="" selected="">--- @lang('home.select_request_service') ---</option>
                                        <option value="Our Wedding Event Catering And Management">Our Wedding Event Catering And Management</option>
                                        <option value="Catering Services For Parties And Events">Catering Services For Parties And Events</option>
                                        <option value="Breakfast, Lunch And Corporate Party Services">Breakfast, Lunch And Corporate Party Services</option>
                                        <option value="Services For Organizing Graduation Events">Services For Organizing Graduation Events</option>
                                        <option value="Product Launch Event Services">Product Launch Event Services</option>
                                        <option value="Social Event Catering And Program Management">Social Event Catering And Program Management</option>
                                    </select>
                                </div>
                                <div class="col-md-12 my-3">
                                    <textarea style="height: 200px;" class="custom-control" name="message" cols="30" placeholder="@lang('home.write_service_description')" rows="10" spellcheck="false"></textarea>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <button type="submit">@lang('home.submit_request')</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- CART SECTION END -->
@endsection
















