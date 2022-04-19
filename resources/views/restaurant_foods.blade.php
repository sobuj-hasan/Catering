@php
    $locale = app()->getLocale();
@endphp
@extends('layouts.catering_app')
@section('title')
    Restaurant Foods
@endsection
@section('body')
    
    <section class="restaurant-view py-2 py-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="restaurant-img">
                        <img class="w-100" height="350" src="{{ asset('assets/img/restaurant/1639924561.png') }}" alt="restaurant-img">
                    </div>
                    <div class="restaurant-owner">
                        <div class="profile-part">
                            <div class="profile d-flex">
                                <img src="{{ asset('assets/img/users/default.png') }}" alt="user-img">
                                <div class="review d-flex pt-4 ms-4">
                                    <a href="">
                                        <h4>AL-Kafi Restaurant</h4>
                                        <span>Super Admin</span>
                                    </a>
                                    <span class="review-icon ps-4 mt-1"><i class="fas fa-star"></i> 0.0/5 (00) </span>
                                </div>
                            </div>
                            <div class="description">
                                <p class="paragraph mt-4">Since the age of 6, Maria Bido acquired a taste for cooking traditional Puerto Rican dishes from her Grandmother. By watching and helping her Grandmother prepare dinners for the family Maria received a non-traditional hands-on Culinary learning experience. As a Mother of four sons in the Lower East Side, Maria continued to cook these traditional dishes for her family and friends. As a result, Maria has become a Local Chef and Caterer in the Lower East Side. The authentic cuisine includes a combination of the flavors of Sofrito and Adobo coupled with an extremely intricate variety of plates which makes for a perfect cuisine. Delicious home cooked meals that will give you a nostalgic taste and remind you of your Grandmother’s Cooking!</p>
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
                        <div class="delivery-time mt-4">
                            <span>
                                <i class="fa-solid fa-clock"></i>
                                Morning (8:00 pm - 12:00 am)
                            </span>
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
{{-- @section('footer_script')
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
@endsection --}}


