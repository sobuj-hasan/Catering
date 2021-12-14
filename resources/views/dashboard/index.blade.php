@extends('layouts.catering_app')
@section('title')
    Dashboard
@endsection
@section('body')
    <div class="container my-5">
        <h4>You'r loged in</h4>
        <p>{{ Auth::user()->name }}</p>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    </div>
@endsection