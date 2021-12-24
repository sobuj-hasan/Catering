<div class="card total-price-card mt-5 text-start">
    <div class="card-body">
        <h6>Total Price</h6>
        <hr class="cart">
        <ul>
            <li>
                <h6>Customer Name <span>asfasdf</span></h6>
            </li>
            <li class="d-flex">
                <h6>Vat & Tex</h6>
                <p>SAR {{ Cart::tax() }}</p>
            </li>
            <li class="d-flex">
                <h6>Subtotal</h6>
                <p>SAR {{ Cart::subtotal() }}</p>
            </li>
        </ul>
        <hr class="cart">
        <ul>
            <li class="d-flex">
                <h4>Payable Amount : </h4>
                <p>SAR {{ Cart::total() }}</p>
            </li>
        </ul>
    </div>
</div>