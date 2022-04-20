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
                        <div class="delivery-time my-4">
                            <span>
                                <i class="fa-solid fa-clock"></i>
                                You can order anytime 24/7 Hours. (8:00 AM - 8:00 PM)
                            </span>
                        </div>
                    </div>
                    <hr>

                        <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                <a class="nav-link" href="#scrollspyHeading1">First</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="#scrollspyHeading2">Second</a>
                                </li>
                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                                    <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
                                </ul>
                                </li>
                            </ul>
                        </nav>
                        <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                            <h4 id="scrollspyHeading1">First heading</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <h4 id="scrollspyHeading2">Second heading</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <h4 id="scrollspyHeading3">Third heading</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <h4 id="scrollspyHeading4">Fourth heading</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                            <h4 id="scrollspyHeading5">Fifth heading</h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
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


