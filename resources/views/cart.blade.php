@extends('layouts.catering_app')
@section('title')
    Your Cart
@endsection
@section('body')
    <!-- CART SECTION START -->
    <div class="cart-section">
        <div class="container">
            <div class="cart-breadcrump my-5">
                <a href="#">Home</a> > <a href="#">Dinner</a> > <a href="#">Hot Meal Stack</a>
            </div>
            <div class="row mb-5">
                <div class="col-12">
                    <div class="billing-info">
                        <button type="submit">Billing Information</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 my-3">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SI NO.</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col"></th>
                                    <th scope="col">Size</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                                <tr class="align-middle">
                                    <th scope="row">1</th>
                                    <td class=""><img width="100" src="assets/img/food/cart1.png" alt="cart-img"></td>
                                    <td class="">
                                        <span class="name">Hot meal Steack</span><br>
                                        <span>Mulla Restaurant</span>
                                    </td>
                                    <td class="text-start">
                                        <p class="d-inline-block">FULL</p>
                                    </td>
                                    <td class="text-start">
                                        <p class="d-inline-block">SAR 150.50</p>
                                    </td>
                                    <td class="text-start">
                                        <p class="d-inline-block"><i class="fas fa-minus"></i>&nbsp;&nbsp; 03 &nbsp;&nbsp;<i
                                                class="fas fa-plus"></i></p>
                                    </td>
                                    <td class="text-start">
                                        SAR 150
                                    </td>
                                </tr>
                                <tr class="align-middle">
                                    <th scope="row">2</th>
                                    <td class=""><img width="100" src="assets/img/food/cart2.png" alt="cart-img"></td>
                                    <td class="">
                                        <span class="name">Hot meal Steack</span><br>
                                        <span>Mulla Restaurant</span>
                                    </td>
                                    <td class="text-start">
                                        <p class="d-inline-block">FULL</p>
                                    </td>
                                    <td class="text-start">
                                        <p class="d-inline-block">SAR 150.50</p>
                                    </td>
                                    <td class="text-start">
                                        <p class="d-inline-block"><i class="fas fa-minus"></i>&nbsp;&nbsp; 02 &nbsp;&nbsp;<i
                                                class="fas fa-plus"></i></p>
                                    </td>
                                    <td class="text-start">
                                        SAR 150
                                    </td>
                                </tr>
                        
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 mt-2 mb-5">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8 col-md-10 col-sm-12">
                            <div class="coupon">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Coupon Code" aria-describedby="basic-addon2">
                                    <button class="input-group-text" id="basic-addon2">Apply Coupon</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 mt-2 mb-5 text-end">
                    <button class="custom-btn"> Update Cart </button>
                    <div class="card total-price-card mt-5 text-start">
                        <div class="card-body">
                            <h6>Total Price</h6>
                            <hr class="cart">
                            <ul>
                                <li>
                                    <h6>Customer Name <span>Sadi Khan</span></h6>
                                </li>
                                <li class="d-flex">
                                    <h6>Vat & Tex</h6>
                                    <!-- <p>SAR 50.00</p> -->
                                </li>
                                <li class="d-flex">
                                    <h6>Total</h6>
                                    <!-- <p>SAR 350.00</p> -->
                                </li>
                            </ul>
                            <hr class="cart">
                            <ul>
                                <li class="d-flex">
                                    <h4>Payable Amount : </h4>
                                    <!-- <p>SAR 350.00</p> -->
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="process-btn d-flex justify-content-end mt-4 mb-4">
                        <a class="readmore-btn m-2" href="#">Back To Home</a>
                        <button class="custom-btn m-2"> Process To Check Out </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CART SECTION END -->
@endsection
















