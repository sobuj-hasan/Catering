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
                    <h5 class="mb-3 text-center">Send Service Request</h5>
                    <form method="POST" action="{{ route('service.request.post') }}">
                        @csrf
                        <div class="contact-form py-5">
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="Full Name" value="" name="name">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="Contact Number" value="" name="phone">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="Email Address" value="" name="email">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="Your Country" value="" name="country">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="Your City" value="" name="city">
                                </div>
                                <div class="col-md-4 my-3">
                                    <input type="text" class="custom-control" placeholder="Your Address" value="" name="address">
                                </div>
                                <div class="col-md-6 my-3">
                                    <input type="date" class="custom-control" placeholder="Service Date" value="" name="service_date">
                                </div>
                                <div class="col-md-6 my-3">
                                    <select class="custom-control" name="service_name">
                                        <option value="" selected="">--- Select Request Service ---</option>
                                        <option value="Our Wedding Event Catering And Management">Our Wedding Event Catering And Management</option>
                                        <option value="Catering Services For Parties And Events">Catering Services For Parties And Events</option>
                                        <option value="Breakfast, Lunch And Corporate Party Services">Breakfast, Lunch And Corporate Party Services</option>
                                        <option value="Services For Organizing Graduation Events">Services For Organizing Graduation Events</option>
                                        <option value="Product Launch Event Services">Product Launch Event Services</option>
                                        <option value="Social Event Catering And Program Management">Social Event Catering And Program Management</option>
                                    </select>
                                </div>
                                <div class="col-md-12 my-3">
                                    <textarea style="height: 200px;" class="custom-control" name="message" cols="30" placeholder="Write Service Description" rows="10" spellcheck="false"></textarea>
                                </div>
                                <div class="col-md-4 mt-3">
                                    <button type="submit">Submit Request</button>
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
















