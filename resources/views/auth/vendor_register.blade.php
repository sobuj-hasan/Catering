@extends('layouts.catering_app')
@section('title')
    Registration
@endsection
@section('body')
    <!-- Register PART START -->
    <div class="login-part sign-up-page vendor-signup my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-7 col-md-9 col-sm-12">
                    <div class="login">
                        <div class="login-section">
                            <h4 class="text-center">Welcome to Our Business Partner</h4>
                            <p class="text-center mb-5">Sign Up</p>
                            <form method="POST" action="{{ route('vendor.register') }}">
                                @csrf
                                <div class="mt-4 login">
                                    <input type="text" class="form-control" placeholder="Restaurant Name" value="{{ old('res_name') }}" name="res_name">
                                </div>
                                @error('res_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="text" class="form-control" placeholder="Contact Person Name" value="{{ old('name') }}" name="name">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="email" class="form-control" placeholder="Contact E-mail" value="{{ old('email') }}" name="email">
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror   
                                <div class="mt-4 login">
                                    <input type="phone" class="form-control" placeholder="Contact Phone" value="{{ old('phone') }}" name="phone">
                                </div>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="text" class="form-control" placeholder="Trade License No." value="{{ old('trade_license') }}" name="trade_license">
                                </div>
                                @error('trade_license')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="text" class="form-control" placeholder="Country" value="{{ old('country') }}" name="country">
                                </div>
                                @error('country')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="text" class="form-control" placeholder="City" value="{{ old('city') }}" name="city">
                                </div>
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="text" class="form-control" placeholder="Address Here" value="{{ old('location') }}" name="location">
                                </div>
                                @error('location')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="password" class="form-control" placeholder="Password" value="{{ old('password') }}" name="password">
                                </div>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mt-4 login">
                                    <input type="password" class="form-control" placeholder="Re-enter-password" value="{{ old('password_confirmation') }}" name="password_confirmation">
                                </div>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div class="mb-4 mt-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Show Password</label>
                                </div>
                                <button class="w-100 mb-2" type="submit" class="btn btn-primary">Submit</button>
                                <span class="form-text">Already Have a Account? <a class="text-bolder" href="{{ route('login') }}">Log In</a></span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register PART END -->
@endsection


