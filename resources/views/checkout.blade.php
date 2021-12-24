@extends('layouts.catering_app')
@section('title')
    Checkout 
@endsection
@section('body')
    <!-- CART SECTION START -->
    <div class="cart-section checkout">
        <div class="container">
            <div class="cart-breadcrump my-5">
                <a href="#">Home</a> > <a href="#">Cart</a> > <a href="#">Checkout</a>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="billing-info">
                        <button type="submit">Fill up the check out form</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 mb-5">
                    <h6>Billing Information</h6>
                    <hr class="checkout">
                    <div class="row">
                        <div class="col-sm-6 mt-5">
                            <div class="mb-4">
                                <label for="name" class="form-label">Full Name </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mt-5">
                            <div class="mb-4">
                                <label for="name" class="form-label">Company Name (if any) </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Phone </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Email Address </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Country / Region </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">City </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Town (Not Mandatory) </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-4">
                                <label for="name" class="form-label">Zip Code </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Street/Flat Address Here </label>
                                <input type="text" class="form-control" value="" name="name">
                                @error('')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-4">
                                <label for="name" class="form-label">Note : </label>
                                <textarea style="height: 100px;" type="text" class="form-control" name="name"></textarea>
                                @error('')
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
                            </div>

                            <div>
                                <input type="checkbox" id="trams-condition" required="" checked="checked" name="terms_condition">
                                <label for="trams-condition" class="bank-trans-label">I agree with all term &amp; and Condition.</label>
                            </div>
                        </div>
                        <div class="col-12 mt-4 ms-1">
                            <button style="width: 100%; background: #4a148c; border: none; color: #ffff; padding:10px;" class="large-btn" type="submit"> Place Order </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART SECTION END -->
@endsection
















