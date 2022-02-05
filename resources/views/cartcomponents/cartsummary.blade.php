<div class="card total-price-card mt-5 text-start">
    <div class="card-body">
        <h6>@lang('home.price_summary')</h6>
        <hr class="cart">
        <ul>
            <div class="summary d-flex">
                <div class="left">
                    <p>@lang('home.customer_name')</p>
                    <p>@lang('home.vat_tex') </p>
                    <p>@lang('home.subtotal') </p>
                </div>
                <div class="right">
                    @if (Auth::guest())
                        <a href="{{ route('login') }}">
                            <p class="text-info"> Login Required </p>
                        </a>
                    @else 
                        <p> {{ Auth::user()->name }} </p>
                    @endif
                    <p>@lang('home.currency') {{ Cart::tax() }}</p>
                    <p>@lang('home.currency') {{ Cart::subtotal() }}</p>
                </div>
            </div>
        </ul>
        <hr class="cart">
        <ul>
            <div class="summary d-flex">
                <div class="left">
                    <h4>@lang('home.payable_amount') : </h4>
                </div>
                <div class="right">
                    <h4>@lang('home.currency') {{ Cart::total() }}</h4>
                </div>
            </div>
        </ul>
    </div>
</div>