@extends('layouts.catering_app')
@section('title')
    Terms & Condition
@endsection
@section('body')
    <section class="privacy-policy py-5">
        <div class="container">
            <div class="content">
            <h4>@lang('home.welcome_to') &nbsp; <span class="highlight preview_website_name"><a class="text-primary" href="{{ route('index') }}">Caterincu.com !</a></span></h4>
            <h5 class="pt-4"><strong>@lang('home.terms_condition')</strong></h5>
            <ul>
                <li class="my-3">
                    <p>
                        <strong>1.</strong>	@lang('home.part_one')
                    </p>
                </li>
                <li class="my-3">
                    <p>
                        <strong>2.</strong>	@lang('home.part_two')
                    </p>
                </li>
                <li class="my-3">
                    <p>
                        <strong>3.</strong>	@lang('home.part_three')
                    </p>
                </li>
                <li class="my-3">
                    <p>
                        <strong>4.</strong> @lang('home.part_four')
                    </p>
                </li>
                <li class="my-3">
                    <p>
                        <strong>5.</strong>	@lang('home.part_five')
                    </p>
                </li>
                <li class="my-3">
                    <p>
                        <strong>6.</strong>	@lang('home.part_six')
                    </p>
                </li>
                <li class="my-3">
                    <p>
                        <strong>7.</strong>	@lang('home.part_seven')
                    </p>
                </li>
            </ul>
            <h5 class="mt-5"><strong>@lang('home.cookies')</strong></h5>
            <p class="paragraph">@lang('home.cookies_text')</p>
            </div>
        </div>
    </section>
@endsection
















