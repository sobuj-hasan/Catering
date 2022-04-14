@php
    $locale = app()->getLocale();
@endphp
<!DOCTYPE html>
@if ($locale == 'ar')
    <html lang="ar" dir="rtl">
@else
    <html lang="en" dir="auto">
@endif
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title-->
    <title> @yield('title') | Catering incubator</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/img/" type="image/gif">
    @if ($locale == 'ar')
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.rtl.min.css">
    @else
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    @endif
    <!--    font awsome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <!-- Toaster css -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css" />
    <!-- slick slider  -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
    <!-- slick theme -->
    <link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @if ($locale == 'ar')
        <link rel="stylesheet" href="{{ asset('assets/css/arabic.css') }}">
    @endif
</head>

<body>
    <!--    HEADER SECTION-->
    <header class="d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-3">
                    <div class="logo d-flex justify-content-between align-items-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('assets/img/logo/logo.png') }}" alt="Logo">
                        </a>
                        <i class="fa fa-bars d-md-none" onClick="mobileClick()" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="col-md-6 d-none d-md-block">
                    <div class="menubar d-flex justify-content-center">
                        <ul>
                            <li><a href="{{ route('index') }}">@lang('home.home')</a></li>
                            <li><a href="{{ route('aboutus') }}">@lang('home.aboutus')</a></li>
                            <li><a href="{{ route('price.plan') }}">@lang('home.pricing')</a></li>
                            <li><a href="{{ route('search.result') }}">@lang('home.foods')</a></li>
                            <li><a href="{{ route('planing.event') }}">@lang('home.services')</a></li>
                            <li><a href="{{ route('contactus') }}">@lang('home.contactus')</a></li>
                            @if ($locale == 'ar')
                                <li>
                                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}">
                                        @lang('home.english')
                                        <img width="35" height="18" src="{{ asset('assets/img/photos/usa-flag.png') }}" alt="">
                                    </a>
                                </li>
                            @else
                                <li>
                                    <a class="fw-bolder" href="{{ request()->fullUrlWithQuery(['lang' => 'ar']) }}">
                                        @lang('home.arabic')
                                        <img width="35" height="18" src="{{ asset('assets/img/photos/ksa-flag.png') }}" alt="">
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="menubar d-flex justify-content-center">
                        <ul>
                            <li>
                                <a href="{{ route('search.result') }}">
                                    <img src="{{ asset('assets/img/icon/search.png') }}" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cart') }}">
                                    <div class="shoppingcartshow">
                                        
                                    </div>
                                </a>
                            </li>
                            @if (Auth::guest())
                                <li class="nav-item dropdown login-dropdown">
                                    <a class="nav-link login-btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('assets/img/icon/user.png') }}" alt="icon"> &nbsp;<span class="mt-2"> @lang('home.signin') &nbsp;<i class="fas fa-chevron-down"></i> </span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="">
                                        <a class="dropdown-item" href="{{ route('login') }}">@lang('home.signin')</a>
                                        <a class="dropdown-item" href="{{ route('register') }}">@lang('home.register_as_user')</a>
                                        <a class="dropdown-item" href="{{ route('vendor') }}">@lang('home.register_as_merchant')</a>
                                    </div>
                                </li>
                            @else
                                <li>
                                    @if (Auth::user()->role == 1)
                                        <a href="{{ route('admin.dashboard') }}">
                                            <img class="rounded-circle" width="30" src="{{ asset('assets/img/users') }}/{{ auth::user()->profile_photo }}" alt="profile" style="border: 1px solid #fae3e3;">
                                        </a>
                                    @endif
                                        @if(Auth::user()->role == 2)
                                            <a href="{{ route('vendor.dashboard') }}">
                                                <img class="rounded-circle" width="30" src="{{ asset('assets/img/users') }}/{{ auth::user()->profile_photo }}" alt="profile" style="border: 1px solid #fae3e3;">
                                            </a>
                                        @endif
                                    @if(Auth::user()->role == 3)
                                        <a href="{{ route('dashboard') }}">
                                            <img class="rounded-circle" width="30" src="{{ asset('assets/img/users') }}/{{ auth::user()->profile_photo }}" alt="profile" style="border: 1px solid #fae3e3;">
                                        </a>
                                    @endif
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--    HEADER SECTION END-->
    
    <!--        MOBILE MENU-->
    <div id="mobile-menu" class="mobile-menu">
        <!-- accordion-->
        <div class="accordion accordion-flush" id="accordionFlushExample">
    
            <div class="mobile-logo mb-5">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
            </div>

            <div class="accordion-item custom">
                <h2 class="accordion-header d-flex" id="flush-headingThree">
                    <a href="{{ route('search.result') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fas fa-search fs-4"></i>
                        </button>
                    </a>
                    <a href="{{ route('cart') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fas fa-shopping-cart fs-4"></i><sup>02</sup>
                        </button>
                    </a>
                    <a href="#">
                        <li class="nav-item dropdown login-dropdown mobile-login">
                            <a class="nav-link login-btn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-user fs-4" style="color: #673091;"></i>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="">
                                    <a class="dropdown-item" href="{{ route('login') }}">@lang('home.signin')</a>
                                    <a class="dropdown-item" href="{{ route('register') }}">@lang('home.register_as_user')</a>
                                    <a class="dropdown-item" href="{{ route('vendor') }}">@lang('home.register_as_merchant')</a>
                                </div>
                            </a>
                        </li>
                    </a>
                </h2>
            </div>
    
            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('index') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Home
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('aboutus') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            About Us 
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('price.plan') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Pricing
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('search.result') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Foods
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('planing.event') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Services 
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="{{ route('contactus') }}">
                        <button class="accordion-button custom collapsed none" type="button">
                            Contact Us
                        </button>
                    </a>
                </h2>
            </div>
        </div>
    </div>
    <div id="mobileOverlay" class="mobile-overlay" onClick="mobileClick()"></div>
    <!--   END MOBILE MENU-->

    @yield('body')

    <!-- FOOTER PART START -->
    <section class="footer-part">
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 text-center pt-0 pb-lg-5 mt-lg-5">
                    <div class="footer-logo">
                        <img src="{{ asset('assets/img/logo/footer-logo.png') }}" alt="footer logo">
                    </div>
                    {{-- <p class="paragraph">@lang('home.footer_article')</p> --}}
                    <p class="paragraph">@lang('home.connect_with_social_media')</p>
                    <div class="social-media">
                        <ul class="d-flex justify-content-center">
                            <li class="ms-1 me-2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li class="ms-1 me-2">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class="ms-1 me-2">
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li class="ms-1 me-2">
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="ms-1 me-2">
                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-lg-5 pb-lg-3 mt-5">
                    <h4 class="pb-2">@lang('home.usefull_link')</h4>
                    <hr class="footer-menu">
                    <div class="footer-menu">
                        <ul class="">
                            <li>
                                <a href="{{ route('aboutus') }}">@lang('home.aboutus')</a>
                            </li>
                            <li>
                                <a href="{{ route('contactus') }}">@lang('home.contact_info')</a>
                            </li>
                            <li>
                                <a href="{{ route('index') }}#latest-blog">@lang('home.our_blog')</a>
                            </li>
                            <li>
                                <a href="{{ route('planing.event') }}">@lang('home.business_management')</a>
                            </li>
                            <li>
                                <a href="{{ route('contactus') }}">@lang('home.help_support')</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-lg-5 pb-lg-3 mt-5">
                    <h4 class="pb-2">@lang('home.officials_address')</h4>
                    <hr class="footer-menu">
                    <div class="footer-menu">
                        <ul class="">
                            <li class="d-flex">
                                <i class="fas fa-map-marker-alt me-3"></i>
                                <p class="paragraph" href="#">@lang('home.office_address_value')</p>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-phone-alt me-3"></i>
                                <p class="paragraph" href="#">@lang('home.phone_value')</p>
                            </li>
                            <li class="d-flex">
                                <i class="far fa-envelope me-3"></i>
                                <p class="paragraph" href="#">@lang('home.email_value')</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="footer-menu">
            <div class="row text-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-3">
                    <p class="paragraph">@lang('home.copyright')</p>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER PART END -->

    <!--    jquery google host-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!--    boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    {{-- for onclick submenu create --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <!-- slick slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Toastr Scripts render -->
    {!! Notify::message() !!}
    {{-- notify any errors --}}
    @if ($errors->any())
        @foreach ($errors->all() as $error)
        <script>
            toastr.error(`{!! $error !!}`, 'Error')
        </script>
        @endforeach
    @endif

    <!-----for Ajax handeling----->
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @yield('footer_script')

    <script>
        $(document).ready(function(){
            showcartcount();
             showcartsummary();
              showcartcontent();
        });

        function showcartcount(){
            $.ajax({
                url: "{{ route('cart.count') }}",
                success: function(data) {
                    $('.shoppingcartshow').html(data);
                }
            });
        }

        function showcartcontent(){
            $.ajax({
                url: "{{ route('cart.content') }}",
                success: function(data) {
                    $('#cartcontentshow').html(data);
                }
            });
        }

        function showcartsummary(){
            $.ajax({
                url: "{{ route('cart.summary') }}",
                success: function(data) {
                    $('#cartsummaryshow').html(data);
                }
            });
        }

        // Product add to cart uses ajax request
        $('.product_id').on('click',function(e){
            e.preventDefault();
            var product_id = $(this).data('id');

              var url = "{{ route('add.to.cart') }}";

            $.ajax({
                type: "post",
                url: url,
                data: {
                    product_id: product_id
                },
                success: function(data){
                    showcartcount();
                    showcartcontent();
                    showcartsummary();
                    if ($.isEmptyObject(data.error)) {
                        toastr.success(data.success, 'Food successfully add to Cart', {
                            timeOut: 3000
                        });
                    } else {
                        toastr.error(data.error, {
                            timeOut: 3000
                        });
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });

        // --- Package --- add to cart uses ajax request
        $('.package_id').on('click',function(e){
            e.preventDefault();
            var package_id = $(this).data('id');

              var url = "{{ route('package.add.to.cart') }}";

            $.ajax({
                type: "post",
                url: url,
                data: {
                    package_id: package_id
                },
                success: function(data){
                    showcartcount();
                    showcartcontent();
                    showcartsummary();
                    if ($.isEmptyObject(data.error)) {
                        toastr.success(data.success, 'Package successfully add to Cart', {
                            timeOut: 3000
                        });
                    } else {
                        toastr.error(data.error, {
                            timeOut: 3000
                        });
                    }
                },
                error: function(data) {
                    console.log('Error:', data);
                }
            });
        });
    </script>

</body>

</html>