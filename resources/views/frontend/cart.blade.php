@extends('frontend.master')

@section('cart')
    active
@endsection

@section('title')
    Cart Page
@endsection

@section('content')
    <!-- .breadcumb-area start -->
    <main class="main">
        <div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
            <div class="container">
                <h1 class="page-title">Shopping Cart</h1>
            </div><!-- End .container -->
        </div><!-- End .page-header -->
        <nav aria-label="breadcrumb" class="breadcrumb-nav">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
                </ol>
            </div><!-- End .container -->
        </nav><!-- End .breadcrumb-nav -->

        <div class="page-content">
            <div class="cart">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9">
                            <form id="incrs_qut" action="{{ route('updatetocart') }}" method="POST">
                                @csrf
                                <table class="table table-cart table-mobile">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th style="text-align: center;">Price</th>
                                            <th style="text-align: center;">Quantity</th>
                                            <th style="text-align: center;">Total</th>
                                            <th></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @php
                                            $grand_total = 0;
                                        @endphp
                                        @foreach ($carts as $cart)
                                            <tr>
                                                <td class="product-col">
                                                    <div class="product">
                                                        <figure class="product-media">
                                                            <a href="{{ route('SingleProduct', $cart->product_id) }}">
                                                                <img src="{{ asset('images/' . $cart->product->thumbnail) }}"
                                                                    alt="Product image">
                                                            </a>
                                                        </figure>
                                                        <h3 class="product-title">
                                                            <a
                                                                href="{{ route('SingleProduct', $cart->product_id) }}">{{ $cart->product->title }}</a>
                                                        </h3><!-- End .product-title -->
                                                    </div><!-- End .product -->
                                                </td>
                                                <td
                                                    class="price-col price unit_price{{ $cart->id }}"data-unit{{ $cart->id }}="{{ number_format($cart->product->price, 2) }}">
                                                    ৳{{ number_format($cart->product->price, 2) }}</td>
                                                <td class="cart-product-quantity" width="130px">
                                                    <div class="input-group quantity">

                                                        <div class="input-group-prepend decrement-btn changequty"
                                                            style="position: absolute; z-index: 999; top: 18px; left: -28px;">
                                                            <span
                                                                style="height: 35px; width: 35px; text-align: center; line-height: 35px; font-size: 18px; cursor: pointer; color: #fff; background: #ef4836; position: absolute; top: 50%; left: 27px; transform: translateY(-51%); -webkit-transform: translateY(-51%); -moz-transform: translateY(-51%);"
                                                                class="input-group-text">-</span>
                                                        </div>


                                                        <input name="quantity[]"
                                                            style=" width: 120px; padding: 0px 35px; text-align: center; height: 35px; position: relative; background: #ccc; color: #0d0d0d; border: none;"
                                                            type="text" class="qty-input form-control" maxlength="2"
                                                            max="10" value="{{ $cart->quantity }}">
                                                        <div class="input-group-append increment-btn changequty"
                                                            style="position: absolute; z-index: 999; right: 35px;">
                                                            <span
                                                                style="top: 0; left: 0; height: 35px; width: 35px; text-align: center; line-height: 35px; font-size: 18px; cursor: pointer; color: #fff; background: #ef4836; position: absolute;"
                                                                class="input-group-text">+</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                @php
                                                    $grand_total += $cart->product->price * $cart->quantity;
                                                @endphp
                                                <td class="total-col total tuin total_unit{{ $cart->id }}"
                                                    style="text-align: center;">
                                                    ৳{{ $cart->product->price * $cart->quantity }}</td>
                                                <td class="remove-col"> <a
                                                        href="{{ route('CartDataDelete', $cart->id) }}"><i
                                                            class="icon-close"></i></a></td>
                                            </tr>
                                            <input type="hidden" name="cart_id[]" value="{{ $cart->id }}">
                                        @endforeach
                                    </tbody>
                                </table><!-- End .table table-wishlist -->
                            </form>
                            <div class="cart-bottom">
                                <div class="cart-discount">
                                    <form action="{{ route('Cart') }}" method="get">
                                        <div class="input-group">
                                            <input type="text"value="{{ $code ?? '' }}" name="coupon_code"
                                                class="form-control" required placeholder="coupon code">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary-2" type="submit"><i
                                                        class="icon-long-arrow-right"></i></button>
                                            </div><!-- .End .input-group-append -->
                                        </div><!-- End .input-group -->
                                    </form>
                                </div><!-- End .cart-discount -->



                            </div><!-- End .cart-bottom -->
                        </div><!-- End .col-lg-9 -->
                        <aside class="col-lg-3">
                            <form action="{{ route('Checkout_Cart') }}" method="get">
                                <div class="summary summary-cart">
                                    <h3 class="summary-title">Cart Total</h3><!-- End .summary-title -->

                                    <table class="table table-summary">
                                        <tbody>
                                            <tr class="summary-subtotal">
                                                <td>Subtotal:</td>
                                                <td>৳{{ $grand_total ?? 0 }}</td>
                                            </tr><!-- End .summary-subtotal -->
                                            <tr class="summary-shipping">
                                                <td>Coupon Discount:</td>
                                                <td class="has">৳{{ $coupon_discount ?? 0 }}</td>
                                            </tr>

                                            <tr class="summary-total">
                                                <td class="grand_total">Total:</td>
                                                <td class="has">৳{{ $grand_total - $coupon_discount ?? 0 }}</td>
                                            </tr><!-- End .summary-total -->
                                        </tbody>
                                    </table><!-- End .table table-summary -->
                                    <input type="hidden" name="coupon_discount"
                                        value="{{ $grand_total - $coupon_discount }}">
                                    <a href="{{ route('Checkout') }}"
                                        class="btn btn-outline-primary-2 btn-order btn-block">PROCEED TO CHECKOUT</a>

                                </div><!-- End .summary -->
                                <span>{{ Session::put('coupon_dis', $grand_total - $coupon_discount) }}</span>
                            </form>
                            <a href="{{ route('Shop') }}" class="btn btn-outline-dark-2 btn-block mb-3"><span>CONTINUE
                                    SHOPPING</span><i class="icon-refresh"></i></a>
                        </aside><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .cart -->
        </div><!-- End .page-content -->
    </main>
    <!-- cart-area end -->
@endsection
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function() {

        $('.increment-btn').click(function(e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value < 10) {
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }

        });

        $('.decrement-btn').click(function(e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if (value > 1) {
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });




        $('.changequty').click(function() {
            document.getElementById('incrs_qut').submit();
        });






        @if (session('discount_pay'))
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('discount_pay') }}'
            })
        @endif






    })
</script>
