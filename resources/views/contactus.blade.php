@extends('layouts.catering_app')
@section('title')
    Contact Us
@endsection
@section('body')
    <!-- BANNER TWO PART START -->
    <section class="banner-two contact-us-banner">
        <div class="overlay">
            <div class="container py-5">
                <div class="row py-sm-3 py-md-4 py-lg-5">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 text-center">
                        <h4>let’s know</h4>
                        <h2 class="section-header after-before">Contact us</h2>
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
                    <h3>Call us</h3>
                    <p class="paragraph mt-4">We are always happy to answer your inquiries and talk with business people about ways in
                        which we can work together to improve business performance. Our doors are open to everyone, welcome
                        to you</p>
                    <p class="paragraph mb-0"><b>Mobile:</b> +966 012 012 001 </p>
                    <p><b>Email:</b> info@caterincu.com </p>
                </div>
                <div class="col-sm-5">
                    <h3>Our Office</h3>
                    <p class="paragraph mt-4">Riyadh Olaya - next to King Fahd Library - Kingdom of Saudi Arabia. <br> Use this form
                        for immediate follow-up if you would like us to serve you.. Which type of our professional services
                        are most important to you?</p>
                    <p class="mt-3">Riyadh, Saudi Arabia </p>
                </div>
            </div>
        </div>
        <div class="container contact mt-5">
            <div class="row p-3 p-md-5 mt-2 mt-sm-0">
                <div class="col-12 text-center mb-5">
                    <h4>I hope your honorable person will fill out this form to <br class="d-none d-sm-block">
                        serve you to the fullest</h4>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">I’m honored by Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Email Address</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Enterprise </label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">What do you want to inquire about?</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">What programs & services are you interested?</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mb-4">
                        <label for="name" class="form-label">Would you like us to contact directly?</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-2">
                        <textarea style="height: 175px;" name="description" rows="5" class="form-control" placeholder="What do you need?"></textarea>
                    </div>
                </div>
    
                <div class="col">
                    <button type="submit">Send Massage</button>
                </div>
            </div>
        </div>
        <br>
    </section>
    
    <!-- Map start -->
    <section class="map py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="pb-3">Google Map</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3710.2835191560466!2d39.21701581397685!3d21.57485347428898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1730ac2c1f7%3A0x13a1d2b048ec9be8!2sMasjid%20Ash%20Shakrin%2C%20Al-Safa%2C%20Jeddah%2023453%2C%20Saudi%20Arabia!5e0!3m2!1sen!2sbd!4v1632650648639!5m2!1sen!2sbd"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map end -->
@endsection


















