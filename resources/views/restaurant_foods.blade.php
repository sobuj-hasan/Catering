@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.catering_app')
@section('title')
    Restaurant Foods
@endsection
@section('body')
    <style>
        body{
            position: relative;
        }
    </style>
    <section class="restaurant-view py-2 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 col-lg-12 col-md-12 col-sm-12">
                    <div class="restaurant-img">
                        <img class="w-100" src="{{ asset('assets/img/restaurant') }}/{{ $restaurants->res_image }}" alt="restaurant-img">
                    </div>
                    <div class="restaurant-owner">
                        <div class="profile-part">
                            <div class="profile d-flex">
                                <img src="{{ asset('assets/img/users') }}/{{ $restaurants->user->profile_photo }}" alt="user-img">
                                <div class="review d-flex pt-4 ms-4">
                                    <a href="">
                                        <h4>{{ $restaurants->res_name }}</h4>
                                        <span>{{ $restaurants->user->name }}</span>
                                    </a>
                                    <span class="review-icon ps-4 mt-1"><i class="fas fa-star"></i> 0.0/5 (00) </span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="paragraph mt-4">{{ $restaurants->description }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="delivery-day">
                            <h4>Delivery Day</h4>
                            <span class="small-text">
                                <i class="fa-solid fa-person-biking"></i>
                                Choose an exact delivery time at checkout
                            </span>
                        </div>
                        <div class="delivery-time my-4">
                            <span>
                                <i class="fa-solid fa-clock"></i>
                                You can order anytime 24/7 Hours. (8:00 AM - 8:00 PM)
                            </span>
                        </div>
                    </div>
                    <hr>

                    <nav id="navbar-example2" class="navbar bg-white px-3 scrolledTwo">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#mostPopular">Most popular</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#entree">Entree</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#moreItems">More items</a>
                            </li>
                        </ul>
                    </nav>
                    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                        <div class="food-design" id="entree">
                            <div class="food-item">
                                <h3 class="mt-4">Most Popular</h3>
                                <div class="row">
                                    @forelse ($popular_foods as $foods)
                                        <div class="col-lg-6 my-3">
                                            <div class="d-flex food p-2">
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="food-header d-flex justify-content-between mt-2">
                                                        <div class="name">
                                                            <h6>{{ $foods->title }}</h6>
                                                        </div>
                                                        <div class="price">
                                                            <h6>SAR {{ $foods->price }}</h6>
                                                        </div>
                                                    </div>
                                                    {{ Str::limit($foods->short_description, 160, $end='..') }}</p>
                                                    <div class="food-badge d-flex">
                                                        <div class="box me-2">
                                                            <p>Available</p>
                                                        </div>
                                                        <div class="box me-2">
                                                            <p>Order 24/7</p>
                                                        </div>
                                                        <div class="cart me-2">
                                                            <button class="custom-btn product_id" data-id={{ $foods->id }} href="#">
                                                                <i class="fa-solid fa-cart-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/img/food') }}/{{ $foods->image }}" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <p class="text-danger">Nothing to show most popular foods...</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        <div class="food-design" id="moreItems">
                            <div class="food-item">
                                <h3 class="mt-4">Entree</h3>
                                <div class="row">
                                    @forelse ($entry_foods as $foods)
                                        <div class="col-lg-6 my-3">
                                            <div class="d-flex food p-2">
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="food-header d-flex justify-content-between mt-2">
                                                        <div class="name">
                                                            <h6>{{ $foods->title }}</h6>
                                                        </div>
                                                        <div class="price">
                                                            <h6>SAR {{ $foods->price }}</h6>
                                                        </div>
                                                    </div>
                                                    {{ Str::limit($foods->short_description, 160, $end='..') }}</p>
                                                    <div class="food-badge d-flex">
                                                        <div class="box me-2">
                                                            <p>Available</p>
                                                        </div>
                                                        <div class="box me-2">
                                                            <p>Order 24/7</p>
                                                        </div>
                                                        <div class="cart me-2">
                                                            <button class="custom-btn product_id" data-id={{ $foods->id }} href="#">
                                                                <i class="fa-solid fa-cart-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/img/food') }}/{{ $foods->image }}" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <p class="text-danger">Nothing to show entree foods...</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>

                        <div class="food-design" id="mostPopular">
                            <div class="food-item">
                                <h3 class="mt-4">More items</h3>
                                <div class="row">
                                    @forelse ($more_foods as $foods)
                                        <div class="col-lg-6 my-3">
                                            <div class="d-flex food p-2">
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="food-header d-flex justify-content-between mt-2">
                                                        <div class="name">
                                                            <h6>{{ $foods->title }}</h6>
                                                        </div>
                                                        <div class="price">
                                                            <h6>SAR {{ $foods->price }}</h6>
                                                        </div>
                                                    </div>
                                                    {{ Str::limit($foods->short_description, 160, $end='..') }}</p>
                                                    <div class="food-badge d-flex">
                                                        <div class="box me-2">
                                                            <p>Available</p>
                                                        </div>
                                                        <div class="box me-2">
                                                            <p>Order 24/7</p>
                                                        </div>
                                                        <div class="cart me-2">
                                                            <button class="custom-btn product_id" data-id={{ $foods->id }} href="#">
                                                                <i class="fa-solid fa-cart-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <img src="{{ asset('assets/img/food') }}/{{ $foods->image }}" alt="...">
                                                </div>
                                            </div>
                                        </div>
                                        @empty
                                        <p class="text-danger">Nothing to show more foods...</p>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- DESCOUNT BANNER STAR -->
    @include('catering_components.discount_banner');
    <!-- DESCOUNT BANNER END -->

    <!-- LATEST BLOG START -->

    @include('catering_components.latest_blog')

    <!-- LATEST BLOG END -->
@endsection



