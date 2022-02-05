@extends('layouts.catering_app')
@section('title')
    Log In
@endsection
@section('body')
    <!-- LOGIN PART START -->
    <div class="login-part my-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10 col-md-12 col-xm-12">
                    <div class="login">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                                <div class="login-section">
                                    <h4 class="text-center">@lang('home.welcome_to')</h4>
                                    <p class="text-center mb-5">@lang('home.signin')</p>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="mt-4 login">
                                            <input type="text" class="form-control" placeholder="@lang('home.email_address')" value="{{ old('email') }}" name="email">
                                            <img src="assets/img/icon/login-user.png" alt="user">
                                        </div>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="mt-4 login">
                                            <input type="password" class="form-control" placeholder="@lang('home.password')" value="{{ old('password') }}" name="password">
                                            <img src="assets/img/icon/lock.png" alt="lock">
                                        </div>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                        <div class="mb-4 mt-4 form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">@lang('home.show_password')</label>
                                        </div>
                                        <button class="w-100 mb-2" type="submit" class="btn btn-primary">@lang('home.signin')</button>
                                        <span class="form-text">@lang('home.havent_any_account') <a class="text-bolder" href="{{ route('register') }}">@lang('home.signup')</a></span>
                                    </form>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-xm-12">
                                <div class="register-section">
                                    <h4 class="text-center mb-3">@lang('home.signup_with')</h4>
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
    <!-- LOGIN PART END -->
@endsection

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-3">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
