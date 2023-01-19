@extends('frontend.master')

@section('title')
    Checkout Page
@endsection

@section('checkout')
    active
@endsection

@section('content')
    <!-- .breadcumb-area start -->
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Checkout<span>Shop</span></h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="checkout">
                <div class="container">
                    <form action="{{ route('payment') }}" method="post" id="payment-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="checkout-title">Billing Details</h2><!-- End .checkout-title -->
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>First Name *</label>
                                        <input type="text" name="first_name" class="form-control" required="">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Last Name *</label>
                                        <input type="text" class="form-control" name="last_name" required="">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->



                                <label>Email address *</label>
                                <input type="email" name="email" class="form-control" required="">



                                <label>Company Name (Optional)</label>
                                <input type="text" name="company" class="form-control">

                                <label>Country *</label>
                                <input type="text" name="country_name" class="form-control" required="">

                                <label>Street address *</label>
                                <input type="text" name="address" class="form-control"
                                    placeholder="House number and Street name" required="">

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Town / City *</label>
                                        <input type="text" name="city_name" class="form-control" required="">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>State / County *</label>
                                        <input type="text" name="state_name" class="form-control" required="">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->

                                <div class="row">
                                    <div class="col-sm-6">
                                        <label>Postcode / ZIP *</label>
                                        <input type="text" class="form-control" name="zipcode" required="">
                                    </div><!-- End .col-sm-6 -->

                                    <div class="col-sm-6">
                                        <label>Phone *</label>
                                        <input type="tel" name="phone" class="form-control" required="">
                                    </div><!-- End .col-sm-6 -->
                                </div><!-- End .row -->



                                <label>Order notes (optional)</label>
                                <textarea class="form-control" name="note" cols="30" rows="4"
                                    placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
                            </div><!-- End .col-lg-9 -->
                            <aside class="col-lg-3">
                                <div class="summary">
                                    <h3 class="summary-title">Your Order</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @php
                                                $grand_total = 0;

                                            @endphp

                                            @foreach ($carts as $cart)
                                                @php
                                                    $grand_total += $cart->product->price * $cart->quantity;

                                                @endphp
                                                <tr>
                                                    <td><a href="#">{{ $cart->product->title }}</a></td><br>
                                                    <input type="hidden" name="store_id"
                                                        value="{{ $cart->product->store_id }}">
                                                    <td>{{ $cart->quantity }} * {{ $cart->product->price }}৳</td>

                                                </tr>
                                            @endforeach




                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>৳{{ $grand_total ?? 0 }}</td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr class="summary-subtotal">
                                                <td>Coupon Discount:</td>
                                                <td>৳{{ $value ?? 0 }}</td>
                                            </tr><!-- End .summary-subtotal -->

                                            <!-- <tr>
      <td>Shipping:</td>
      <td>
                                        <input class="dhaka" name="shipping" type="radio" value="{{ 60.05 }}"> Dhaka<br>
                                        <input class="outside_dhaka" name="shipping" type="radio" value="{{ 160.05 }}"> Out Side Of Dhaka
                                      </td>
      </tr>
                                    <tr class="summary-subtotal">
                                      <td>Grand Total:</td>
                                      <td class="shipped total" data-product="@if ($value > 0) {{ $value }}@else{{ $grand_total }} @endif" value="@if ($value > 0) {{ $value }} @else {{ $grand_total }} @endif"><span class="pull-right total_in">৳@if ($value > 0)
    {{ $value }}
@else
    {{ $grand_total }}
    @endif
    </span></td>
                                      <input class="total" type="text" value="@if ($value > 0) {{ $value }}@else{{ $grand_total }} @endif">
                                    </tr> -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->

                                    <!-- <li>Subtotal <span class="pull-right"><strong>${{ $grand_total }}</strong></span></li> -->
                                    <li
                                        style="font-size: 15px; font-weight: 500;margin-top: 14px;list-style: none;color: #333;">
                                        Shipping <span class="pull-right" style="margin-top: -20px" required>
                                            <input class="dhaka" name="shipping" type="radio"
                                                value={{ 60.05 }}> Dhaka<br>
                                            <input class="outside_dhaka" name="shipping" type="radio"
                                                value={{ 160.05 }}> Out Side Of Dhaka
                                        </span></li>
                                    <li class="summary-subtotal total"
                                        style="font-size: 15px;font-weight: 500;margin-top: 14px;list-style: none;color: #333;"
                                        value="{{ $grand_total }}">Total<span class="pull-right total_in">$
                                            {{ $grand_total }}</span></li>

                                    <div class="accordion-summary" id="accordion-payment">
                                        <ul style="margin-top: 50px;font-size: 18px;font-weight: 600;"
                                            class="payment-method">
                                            <li>
                                                <input id="bank" value="bank" type="radio" name="payment">
                                                <label for="bank">Direct Bank Transfer</label>
                                            </li>
                                            <li>
                                                <input id="paypal" value="paypal" type="radio" name="payment">
                                                <label for="paypal">Paypal</label>
                                            </li>
                                            <li>
                                                <input id="card" value="card" type="radio" name="payment">
                                                <label for="card">Credit Card</label>
                                            </li>

                                            <div id="card_selector">

                                                <label for="card-element">
                                                    Credit or debit card
                                                </label>

                                                <div id="card-element">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>

                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>

                                            </div>

                                            <li>


                                                <input id="cash" value="cash" type="radio" name="payment">
                                                <label for="cash">Cash on Delivery</label>
                                            </li>
                                        </ul>
                                    </div><!-- End .accordion -->

                                    <button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
                                        <span class="btn-text">Place Order</span>
                                        <span class="btn-hover-text">Proceed to Checkout</span>
                                    </button>
                                </div><!-- End .summary -->
                            </aside><!-- End .col-lg-3 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .container -->
            </div><!-- End .checkout -->
        </div><!-- End .page-content -->
    </main>
    <!-- checkout-area end -->
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function() {


        //SELECTION SCRIPT

        $('.dhaka').click(function() {
            let total = $('.total').val();
            let dhaka = $('.total').val();

            $('.total_in').html('$' + (total + 60.05));

        })

        $('.outside_dhaka').click(function() {
            let total = $('.total').val();
            $('.total_in').html('$' + (total + 160.05));

        })





    });
    //Stripe Js Code End
</script>
