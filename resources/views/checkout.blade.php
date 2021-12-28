@extends('layouts.catering_app')
@section('title')
    Checkout 
@endsection
@section('body')
    <!-- CART SECTION START -->
    <div class="cart-section checkout">
        <div class="container">
            <div class="cart-breadcrump my-5">
                <a href="{{ route('index') }}">Home</a> > <a href="{{ route('cart') }}">Cart</a> > <a href="">Checkout</a>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="billing-info">
                        <button type="submit">Fill up the check out form</button>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('order.store') }}">
                @csrf
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 mb-5">
                        <h6>Billing Information</h6>
                        <hr class="checkout">
                        <div class="row">
                            <div class="col-sm-6 mt-5">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Full Name </label>
                                    <input type="hidden" name="billing_id" value="@if($countb) {{ $billing->id }} @endif">
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->name }} @endif" name="name">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6 mt-5">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Company Name (if any) </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->company_name }} @endif" name="company_name">
                                    @error('company_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Phone </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->phone }} @endif" name="phone">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Email Address </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->email }} @endif" name="email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Country / Region </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->country }} @endif" name="country">
                                    @error('country')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="name" class="form-label">City </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->city }} @endif" name="city">
                                    @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Town (Not Mandatory) </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->town }} @endif" name="town">
                                    @error('town')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Zip Code </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->zip_code }} @endif" name="zip_code">
                                    @error('zip_code')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Street/Flat Address Here </label>
                                    <input type="text" class="form-control" value="@if($countb) {{ $billing->address }} @endif" name="address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="mb-4">
                                    <label for="name" class="form-label">Note : </label>
                                    <textarea style="height: 100px;" type="text" class="form-control" name="opinion">@if($countb) {{ $billing->opinion }} @endif</textarea>
                                    @error('opinion')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 mb-5">
                        <div class="row">
                            <div class="col-12">
                                <h6>Your Order</h6>
                                <hr>
                            </div>
                            <div class="col-12 mt-5 p-4">
                                <div class="border p-3 mb-3">
                                    <div class="py-2">
                                        <input type="radio" name="payment_method" value="1" id="bank_trans" required="">
                                        <label for="bank_trans">Bank Transfer</label>
                                    </div>
                                    <p>
                                        Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order will not be shipped until the funds have cleared in
                                        our account.
                                    </p>
                                    <div class="py-2">
                                        <input type="radio" name="payment_method" value="2" id="credit_card" required="">
                                        <label for="credit_card">Cradit Card</label>
                                    </div>
                                    <p>
                                        Make your payment directly into our bank account. Please use your Order ID as the
                                        payment reference. Your order will not be shipped until the funds have cleared in
                                        our account.
                                    </p>
                                    <div class="py-2">
                                        <input type="radio" name="payment_method" value="3" id="cash_delivery" checked="checked" required="">
                                        <label for="cash_delivery">Cash on Delivery</label>
                                    </div>
                                    @error('payment_method')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div>
                                    <input type="checkbox" id="trams-condition" checked="checked" name="terms_condition" required>
                                    <label for="trams-condition" class="bank-trans-label">I agree with all term &amp; and Condition.</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4 ms-1">
                                <button style="width: 100%; background: #4a148c; border: none; color: #ffff; padding:10px;" class="large-btn" type="submit"> Place Order </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- CART SECTION END -->
@endsection
















