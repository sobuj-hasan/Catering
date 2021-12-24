<div class="card total-price-card mt-5 text-start">
    <div class="card-body">
        <h6>Price Summary</h6>
        <hr class="cart">
        <ul>
            <div class="summary d-flex">
                <div class="left">
                    <p>Customer Name </p>
                    <p>Vat & Tax </p>
                    <p>Subtotal </p>
                </div>
                <div class="right">
                    @if (Auth::guest())
                        <a href="{{ route('login') }}">
                            <p class="text-info"> Login Required </p>
                        </a>
                    @else 
                        <p> {{ Auth::user()->name }} </p>
                    @endif
                    <p>SAR {{ Cart::tax() }}</p>
                    <p>SAR {{ Cart::subtotal() }}</p>
                </div>
            </div>
        </ul>
        <hr class="cart">
        <ul>
            <div class="summary d-flex">
                <div class="left">
                    <h4>Payable Amount : </h4>
                </div>
                <div class="right">
                    <h4>SAR {{ Cart::total() }}</h4>
                </div>
            </div>
        </ul>
    </div>
</div>