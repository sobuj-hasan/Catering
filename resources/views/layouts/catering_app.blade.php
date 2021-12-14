<!DOCTYPE html>
<html lang="en">
<!-- <html lang="ar" dir="rtl"> -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Title-->
    <title> @yield('title') | Catering incubator</title>
    <!-- Favicon-->
    <link rel="icon" href="assets/img/" type="image/gif">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
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
    <!-- <link rel="stylesheet" href="assets/css/arabic.css"> -->
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
                            <li><a href="{{ route('index') }}">Home</a></li>
                            <li><a href="{{ route('planing.event') }}">Menu</a></li>
                            <li><a href="{{ route('price.plan') }}">Pricing</a></li>
                            <li><a href="{{ route('planing.event') }}">Lunch</a></li>
                            <li><a href="{{ route('contactus') }}">Help</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 d-none d-md-block">
                    <div class="menubar d-flex justify-content-center">
                        <ul>
                            <li>
                                <a href="">
                                    <img src="{{ asset('assets/img/icon/search.png') }}" alt="icon">
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('cart') }}">
                                    <img src="{{ asset('assets/img/icon/shoping-cart.png') }}" alt="icon">
                                    <sup>02</sup>
                                </a>
                            </li>
                            @if (Auth::guest())
                                <li>
                                    <a href="{{ route('login') }}">
                                        <img src="{{ asset('assets/img/icon/user.png') }}" alt="icon">
                                    </a>
                                </li>
                            @else
                                <li>
                                    @if (Auth::user()->role == 1)
                                        <a href="{{ route('admin.dashboard') }}">
                                            <img class="rounded-circle" width="30" src="{{ asset('assets/img/users') }}/{{ auth::user()->profile_photo }}" alt="profile">
                                        </a>
                                    @else
                                        <a href="{{ route('dashboard') }}">
                                            <img class="rounded-circle" width="30" src="{{ asset('assets/img/users') }}/{{ auth::user()->profile_photo }}" alt="profile">
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
                <a href="#">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" alt="mobile-logo">
                </a>
                <i id="mobile-cross" class="fa fa-times" onClick="mobileClick()"></i>
            </div>
    
            <div class="accordion-item custom ">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="index.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            Home
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="search_result.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            Menu
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="price_plan.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            Pricing
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="planing_event.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            Lunch
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="contact_us.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            Help
                        </button>
                    </a>
                </h2>
            </div>
            <div class="accordion-item custom">
                <h2 class="accordion-header" id="flush-headingThree">
                    <a href="index.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fas fa-search fs-4"></i>
                        </button>
                    </a>
                    <a href="cart.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="fas fa-shopping-cart fs-4"></i><sup>02</sup>
                        </button>
                    </a>
                    <a href="login.html">
                        <button class="accordion-button custom collapsed none" type="button">
                            <i class="far fa-user fs-4"></i>
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
                    <p class="paragraph">Connect with social media</p>
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
                    <h4 class="pb-2">Usefull link</h4>
                    <hr class="footer-menu">
                    <div class="footer-menu">
                        <ul class="">
                            <li>
                                <a href="{{ route('aboutus') }}">About us</a>
                            </li>
                            <li>
                                <a href="{{ route('contactus') }}">Contact info</a>
                            </li>
                            <li>
                                <a href="{{ route('blog.details') }}">Our Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('planing.event') }}">Business Management</a>
                            </li>
                            <li>
                                <a href="{{ route('contactus') }}">Help & Support</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 pt-lg-5 pb-lg-3 mt-5">
                    <h4 class="pb-2">Official Address</h4>
                    <hr class="footer-menu">
                    <div class="footer-menu">
                        <ul class="">
                            <li class="d-flex">
                                <i class="fas fa-map-marker-alt me-3"></i>
                                <p class="paragraph" href="#">Riadah Incubators Startup Studio And corporate factory - Khaldiya Towers - 4th Tower - Faisal Bin Turki Road - Office
                                No. 6 - Floor 13 – Riyadh</i></p>
                            </li>
                            <li class="d-flex">
                                <i class="fas fa-phone-alt me-3"></i>
                                <p class="paragraph" href="#">+966 012 012 001</p>
                            </li>
                            <li class="d-flex">
                                <i class="far fa-envelope me-3"></i>
                                <p class="paragraph" href="#">info@caterincu.com</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="footer-menu">
            <div class="row text-center">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 py-3">
                    <p class="paragraph">@copyright 2021 | All right reserved at cater incubator.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- FOOTER PART END -->

    <!--    jquery google host-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!--    boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Toastr script CDN -->
    <script src="https://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <!-- slick slider -->
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Custom js -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <!-- Toastr Scripts render -->
    {!! Notify::message() !!}

    @yield('footer_script')




</body>

</html>