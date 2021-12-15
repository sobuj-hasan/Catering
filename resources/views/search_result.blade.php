@extends('layouts.catering_app')
@section('title')
    Search result
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-three">
        <div class="overlay">
            <div class="container py-5">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-7 col-lg-7 col-md-8 col-sm-12 m-auto text-center py-lg-5">
                        <div class="input-group mb-3 py-lg-4">
                            <input type="text" class="custom-search form-control" placeholder="Find Diner" aria-label="Find Diner"
                                aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary ps-sm-2 ps-lg-4 pe-sm-2 pe-lg-4" type="button" id="button-addon2"> Search </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER TWO PART END -->

    <!-- SEARCH LOCATION START -->
    <section class="search-location my-5">
        <div class="container">
            <div class="location">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d463876.93971471715!2d46.54234411876101!3d24.725555344345064!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03890d489399%3A0xba974d1c98e79fd5!2sRiyadh%20Saudi%20Arabia!5e0!3m2!1sen!2sbd!4v1638432509258!5m2!1sen!2sbd"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- SEARCH LOCATION END -->

    <!-- SEARCH RESULT PART START -->
    <section class="search-result my-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-1.png') }}" alt="restorent-img">
                        <p>40% OFF</p>
                    </div>
                    <div class="review d-flex pt-4">
                        <p>AL-Here Restaurant</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-2.png') }}" alt="restorent-img">
                        <p>45% OFF</p>
                    </div>
                    <div class="review d-flex pt-4">
                        <p>Mossarf Restaurant</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-3.png') }}" alt="restorent-img">
                        <p>50% OFF</p>
                    </div>
                    <div class="review d-flex pt-4">
                        <p>Al-Kafi Restaurant</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-4.png') }}" alt="restorent-img">
                        <!-- <p>40% OFF</p> -->
                    </div>
                    <div class="review d-flex pt-4">
                        <p>Lokma Steak House</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-5.png') }}" alt="restorent-img">
                        <p>40% OFF</p>
                    </div>
                    <div class="review d-flex pt-4">
                        <p>AL-Here Restaurant</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-6.png') }}" alt="restorent-img">
                        <p>45% OFF</p>
                    </div>
                    <div class="review d-flex pt-4">
                        <p>Mossarf Restaurant</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>
                
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-7.png') }}" alt="restorent-img">
                        <p>50% OFF</p>
                    </div>
                    <div class="review d-flex pt-4">
                        <p>Al-Kafi Restaurant</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 mb-5">
                    <div class="image">
                        <img width="100%" src="{{ asset('assets/img/food/restaurant-image-8.png') }}" alt="restorent-img">
                        <!-- <p>40% OFF</p> -->
                    </div>
                    <div class="review d-flex pt-4">
                        <p>Lokma Steak House</p>
                        <span class="ps-4"><i class="fas fa-star"></i> 4.8/5 (220) </span>
                    </div>
                    <i class="fas fa-map-marker-alt"></i><span class="away ps-2"> Riadah, Saudi Arab/ 2km away</span>
                </div>
            </div>
        </div>
    </section>
    <!-- SEARCH RESULT PART START -->

    <!-- SPECIAL CATERING START  -->
    <section class="special-catering">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-start mb-sm-3 mb-lg-5 best-items">
                    <h4>Our Best Items </h4><hr class="best-item">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center mb-sm-3 mb-lg-5">
                    <div class="catering-item">
                        <div class="offer">
                            <img src="assets/img/photos/cheese-Burger.png" alt="catering-img">
                            <div class="discount">
                                <h4>25% Off</h4>
                            </div>
                        </div>
                        <h4>Royel Cheeseburger</h4>
                        <p class="paragraph pt-2 ps-2 pe-2">It is a long established fact that a reader will be distracted
                            by the readable content.</p>
                        <h4 class="price">$09.99</h4>
                        <div class="add-cart mt-3 mb-5">
                            <button class="custom-btn" href="">Add to Cart</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center mb-sm-3 mb-lg-5">
                    <div class="catering-item">
                        <div class="offer">
                            <img src="assets/img/photos/luxurious-meal.png" alt="catering-img">
                            <!-- <div class="discount">
                                    <h4>25% Off</h4>
                                </div> -->
                        </div>
                        <h4>Luxarius Meal</h4>
                        <p class="paragraph pt-2 ps-2 pe-2">It is a long established fact that a reader will be distracted
                            by the readable content.</p>
                        <h4 class="price">$09.99</h4>
                        <div class="add-cart mt-3 mb-5">
                            <button class="custom-btn" href="">Add to Cart</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center mb-sm-3 mb-lg-5">
                    <div class="catering-item">
                        <div class="offer">
                            <img src="assets/img/photos/chicken-fry-&-salad.png" alt="catering-img">
                            <!-- <div class="discount">
                                    <h4>25% Off</h4>
                                </div> -->
                        </div>
                        <h4>Chiken Fry & Salad</h4>
                        <p class="paragraph pt-2 ps-2 pe-2">It is a long established fact that a reader will be distracted
                            by the readable content.</p>
                        <h4 class="price">$09.99</h4>
                        <div class="add-cart mt-3 mb-5">
                            <button class="custom-btn" href="">Add to Cart</button>
                        </div>
                    </div>
                </div>
    
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 text-center mb-sm-3 mb-lg-5">
                    <div class="catering-item">
                        <div class="offer">
                            <img src="assets/img/photos/vegetable-with-chicken.png" alt="catering-img">
                            <!-- <div class="discount">
                                    <h4>25% Off</h4>
                                </div> -->
                        </div>
                        <h4>Vegitable with chiken</h4>
                        <p class="paragraph pt-2 ps-2 pe-2">It is a long established fact that a reader will be distracted
                            by the readable content.</p>
                        <h4 class="price">$09.99</h4>
                        <div class="add-cart mt-3 mb-5">
                            <button class="custom-btn" href="">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SPECIAL CATERING END  -->

    <!-- DESCOUNT BANNER STAR -->
    <section class="discount-banner mb-sm-3 mb-lg-5">
        <div class="container-fluid">
            <div class="banner-img">
                <div class="container">
                    <div class="row text-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mt-sm-3 mt-lg-5">
                            <h4 class="mb-3 mt-5">Take a Chance</h4>
                            <h3>40% Discount for First Order</h3>
                            <h3>Or</h3>
                            <h3>Discuss your project</h3>
                            <div class="add-cart mt-5 mb-5">
                                <button class="custom-btn" href="">Send us request</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DESCOUNT BANNER END -->

    <!-- LATEST BLOG START -->
    <section class="latest-blog my-5">
        <div class="container">
            <div class="row text-center pt-lg-5">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-5">
                    <h2 class="section-header after-before">Our Latest Blog</h2>
                    <div class="after-design">
                        <i class="fas fa-circle"></i>
                    </div>
                </div>
            </div>
            <div class="row pb-5">
                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
                    <img class="img-fluid" src="assets/img/blog/Our-latest-blogs.png" alt="blog">
                    <a href="blog_details.html">
                        <h4 class="py-4">There are many variations of passages of Lorem Ipsum available....</h4>
                    </a>
                    <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                        Ipsum has been the
                        industry's standard
                        dummy text ever since
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <div class="blog-info mt-5 d-flex">
                        <span>Posted By Admin / 02 hr 20 ago</span>
                        <div class="right">
                            <i class="far fa-comment"></i> <span class="ms-1"> 123</span>
                            <i class="fas fa-share-alt ms-2"></i> <span class="ms-1"> 08</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
                    <div class="d-flex blog align-items-center mb-4">
                        <img style="width: 180px;" src="assets/img/blog/blog1.png" alt="blog-img">
                        <div class="flex-grow-1 ms-3 align-self-center content">
                            <span class="badge">Catering</span>
                            <span class="badge">Big Burger</span>
                            <a href="blog_details.html">
                                <h4 class="py-2">There are many variations of passages of Lorem Ipsum available...</h4>
                            </a>
                            <div class="blog-info d-flex">
                                <span>Posted By Admin / 02 hr 20 ago</span>
                                <div class="right">
                                    <i class="far fa-comment"></i> <span class="ms-1"> 123</span>
                                    <i class="fas fa-share-alt ms-2"></i> <span class="ms-1"> 08</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="d-flex blog align-items-center mb-4">
                        <img style="width: 180px;" src="assets/img/blog/blog2.png" alt="blog-img">
                        <div class="flex-grow-1 ms-3 align-self-center content">
                            <span class="badge">Delivery</span>
                            <a href="blog_details.html">
                                <h4 class="py-2">It is a long established fact that a reader will be distracted...</h4>
                            </a>
                            <div class="blog-info d-flex">
                                <span>Posted By Admin / 02 hr 20 ago</span>
                                <div class="right">
                                    <i class="far fa-comment"></i> <span class="ms-1"> 123</span>
                                    <i class="fas fa-share-alt ms-2"></i> <span class="ms-1"> 08</span>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="d-flex blog align-items-center mb-4">
                        <img style="width: 180px;" src="assets/img/blog/blog3.png" alt="blog-img">
                        <div class="flex-grow-1 ms-3 align-self-center content">
                            <span class="badge">Fried Chiken</span>
                            <span class="badge">Big Chiken Fry</span>
                            <span class="badge">Discount</span>
                            <a href="blog_details.html">
                                <h4 class="py-2">Contrary to popular belief, Lorem Ipsum is not simply random text...</h4>
                            </a>
                            <div class="blog-info d-flex">
                                <span>Posted By Admin / 02 hr 20 ago</span>
                                <div class="right">
                                    <i class="far fa-comment"></i> <span class="ms-1"> 123</span>
                                    <i class="fas fa-share-alt ms-2"></i> <span class="ms-1"> 08</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- LATEST BLOG END -->
@endsection