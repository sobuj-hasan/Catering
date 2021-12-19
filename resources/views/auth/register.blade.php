@extends('layouts.catering_app')
@section('title')
    Registration
@endsection
@section('body')
    <!-- Register PART START -->
    <div class="login-part sign-up-page my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 col-xm-12">
                    <div class="login">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                                <div class="login-section">
                                    <h4 class="text-center">Welcome to</h4>
                                    <p class="text-center mb-5">Sign Up</p>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="mt-4 login">
                                            <input type="text" class="form-control" placeholder="Your Name" value="{{ old('name') }}" name="name">
                                            <img src="assets/img/icon/login-user.png" alt="user">
                                        </div>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror   
                                        <div class="mt-4 login">
                                            <input type="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" name="email">
                                            <img width="20" height="25" src="assets/img/icon/email-icon.svg" alt="lock">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror   
                                        <div class="mt-4 login">
                                            <input type="phone" class="form-control" placeholder="Phone" value="{{ old('phone') }}" name="phone">
                                            <img width="18" height="25" src="assets/img/icon/phone.png" alt="lock">
                                        </div>
                                        @error('phone')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror   
                                        <div class="mt-4 login">
                                            <input type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" name="password">
                                            <img src="assets/img/icon/lock.png" alt="lock">
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="mt-4 login">
                                            <input type="password" class="form-control" placeholder="Re-enter-password" value="{{ old('password_confirmation') }}" name="password_confirmation">
                                            <img src="assets/img/icon/lock.png" alt="lock">
                                        </div>
                                        @error('password_confirmation')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="mb-4 mt-3 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                        </div>
                                        <button class="w-100 mb-2" type="submit" class="btn btn-primary">Submit</button>
                                        <span class="form-text">Become a Business Partner ? <a class="text-bolder" href="{{ route('vendor') }}">Vendor Here</a></span>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                                <div class="register-section">
                                    <h4 class="text-center mb-3">Sign Up with</h4>
                                    <div class="sign-up-btn mb-4 d-flex justify-content-center">
                                        <li class="">
                                            <a href="#"> <i class="fab fa-facebook-f"></i> </a>
                                        </li>
                                        <li class="">
                                            <a href="#"> <i class="fab fa-twitter"></i> </a>
                                        </li>
                                        <li class="">
                                            <a href="#"> <i class="fab fa-linkedin-in"></i> </a>
                                        </li>
                                        <li class="">
                                            <a href="#"> <i class="fab fa-instagram"></i> </a>
                                        </li>
                                        <li class="">
                                            <a href="#"> <i class="fab fa-pinterest-p"></i> </a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register PART END -->
@endsection


