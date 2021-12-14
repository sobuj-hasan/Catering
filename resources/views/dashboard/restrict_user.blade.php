@extends('layouts.catering_app')
@section('title')
    Restricted User
@endsection
@section('body')
    <div class="container">
        <div class="alert-alert-danger text-center">
            <h5>Your Account is restricted </h5>
            <form method="POST" action="{{ route('logout') }}">
                <button class="custom-btn" type="submit"> Logout </button>
            </form>
        </div>
    </div>
@endsection



