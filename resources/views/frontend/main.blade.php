@extends('frontend.master')

@section('home')
    active
@endsection

@section('content')

        <main class="main">
            <div class="intro-slider-container">
                <div class="intro-slider owl-carousel owl-theme owl-nav-inside owl-light" data-toggle="owl" data-owl-options='{
                        "dots": false,
                        "nav": false,
                        "responsive": {
                            "992": {
                                "nav": true
                            }
                        }
                    }'>
                    <div class="intro-slide" style="background-image: url({{ asset('frontend/assets/images/demos/demo-6/slider/slide-1.jpg') }});">
                        <div class="container intro-content text-center">


                            <div class="one" style="margin: -130px 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                            <div class="two" style="margin: 0 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                            <div class="three" style="margin: 0 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                            <div class="four" style="margin: 0 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->

                    <div class="intro-slide" style="background-image: url({{ asset('frontend/assets/images/demos/demo-6/slider/slide-2.jpg') }} );">
                        <div class="container intro-content text-center">

                            <div class="one" style="margin: -130px 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                            <div class="two" style="margin: 0 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                            <div class="three" style="margin: 0 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                            <div class="four" style="margin: 0 0 20px;">
                              <a href="category.html" class="btn btn-outline-white-4">
                                  <span>Discover More</span>
                              </a>
                            </div>
                        </div><!-- End .intro-content -->
                    </div><!-- End .intro-slide -->
                </div><!-- End .intro-slider owl-carousel owl-theme -->

                <span class="slider-loader"></span><!-- End .slider-loader -->
            </div><!-- End .intro-slider-container -->

            <div class="pt-2 pb-3">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-6/banners/banner-1.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h4 class="banner-subtitle text-white"><a href="#">New in</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#"><strong>Women’s</strong></h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link underline">Shop Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-sm-6 -->

                        <div class="col-sm-6">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-6/banners/banner-2.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h4 class="banner-subtitle text-white"><a href="#">New in</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#"><strong>Men’s</strong></a></h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link underline">Shop Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-sm-6 -->
                    </div><!-- End .row -->
                    <hr class="mt-0 mb-0">
                </div><!-- End .container -->
            </div><!-- End .bg-gray -->

            <div class="mb-5"></div><!-- End .mb-5 -->
            <div class="container">
                <div class="heading heading-center mb-3">
                    <h2 class="title">Trending</h2><!-- End .title -->

                    <ul class="nav nav-pills justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="trending-all-link" data-toggle="tab" href="#trending-all-tab" role="tab" aria-controls="trending-all-tab" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-women-link" data-toggle="tab" href="#trending-women-tab" role="tab" aria-controls="trending-women-tab" aria-selected="false">Women</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="trending-men-link" data-toggle="tab" href="#trending-men-tab" role="tab" aria-controls="trending-men-tab" aria-selected="false">Men</a>
                        </li>
                    </ul>
                </div><!-- End .heading -->

                <div class="tab-content tab-content-carousel">
                    <div class="tab-pane p-0 fade show active" id="trending-all-tab" role="tabpanel" aria-labelledby="trending-all-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $19.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-2-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-3-thumb.jpg') }}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-2-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-2-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Shoes</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Sandals</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $24.99
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-3-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-3-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Printed sweatshirt</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now $7.99</span>
                                        <span class="old-price">Was $12.99</span>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $17.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-2-thumb.jpg') }}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $19.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-2-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-3-thumb.jpg') }}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane p-0 fade" id="trending-women-tab" role="tabpanel" aria-labelledby="trending-women-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":0
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-3-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-3-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Printed sweatshirt</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now $7.99</span>
                                        <span class="old-price">Was $12.99</span>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Linen-blend paper bag trousers</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $17.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-4-2-thumb.jpg') }}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->

                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Denim jacket</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        $19.99
                                    </div><!-- End .product-price -->

                                    <div class="product-nav product-nav-thumbs">
                                        <a href="#" class="active">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-2-thumb.jpg') }}" alt="product desc">
                                        </a>
                                        <a href="#">
                                            <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-1-3-thumb.jpg') }}" alt="product desc">
                                        </a>
                                    </div><!-- End .product-nav -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->

                    <div class="tab-pane p-0 fade" id="trending-men-tab" role="tabpanel" aria-labelledby="trending-men-link">
                        <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl"
                            data-owl-options='{
                                "nav": false,
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":0
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                            <div class="product product-7 text-center">
                                <figure class="product-media">
                                    <span class="product-label label-sale">sale</span>
                                    <a href="product.html">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-3-1.jpg') }}" alt="Product image" class="product-image">
                                        <img src="{{ asset('frontend/assets/images/demos/demo-6/products/product-3-2.jpg') }}" alt="Product image" class="product-image-hover">
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->

                                    <div class="product-action">
                                        <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div><!-- End .product-action -->
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="#">Clothing</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">Printed sweatshirt</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">Now $7.99</span>
                                        <span class="old-price">Was $12.99</span>
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .owl-carousel -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .container -->

            <div class="mb-5"></div><!-- End .mb-5 -->

            <div class="deal bg-image pt-8 pb-8" style="background-image: url({{ asset('frontend/assets/images/demos/demo-18/slider/slide-2.jpg') }});">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-12 col-md-10 col-lg-10">
                            <div class="deal-content text-center">

                            </div><!-- End .deal-content -->
                            <div class="intro" style="padding: 8.5rem 8.5rem 8.5rem 8.5rem;border: .1rem solid #fff; text-align: center;">
				                        	<div class="title">
				                        		<h3 style="font-size: 1.3rem;font-weight: 300;letter-spacing: .1em;color: #fff;text-transform: uppercase;">End of Season Sale</h3>
				                        	</div>
				                        	<div class="content">
				                        		<h4 style="font-size: 8rem;font-weight: 700;font-family: 'Playfair Display';letter-spacing: .01em;color: #fff;text-transform: uppercase;">Save 40% off</h4>
				                        	</div>
				                        	<div class="action">
				                        		<a href="category.html" style="font-size: 1.3rem;font-weight: 300;letter-spacing: .1em;color: #fff;text-transform: uppercase;transition: all .3s;">discover now</a>
				                        	</div>
				                        </div>
                        </div><!-- End .col-lg-5 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .deal -->

            <div class="pt-4 pb-3" style="background-color: #222;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-truck"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Payment & Delivery</h3><!-- End .icon-box-title -->
                                    <p>Free shipping for orders over $50</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-rotate-left"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Return & Refund</h3><!-- End .icon-box-title -->
                                    <p>Free 100% money back guarantee</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-unlock"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Secure Payment</h3><!-- End .icon-box-title -->
                                    <p>100% secure payment</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->

                        <div class="col-lg-3 col-sm-6">
                            <div class="icon-box text-center">
                                <span class="icon-box-icon">
                                    <i class="icon-headphones"></i>
                                </span>
                                <div class="icon-box-content">
                                    <h3 class="icon-box-title">Quality Support</h3><!-- End .icon-box-title -->
                                    <p>Alway online feedback 24/7</p>
                                </div><!-- End .icon-box-content -->
                            </div><!-- End .icon-box -->
                        </div><!-- End .col-lg-3 col-sm-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-light pt-2 pb-2 -->

            <div class="mb-6"></div><!-- End .mb-5 -->

            <div class="container">
                <h2 class="title text-center mb-4">New Arrivals</h2><!-- End .title text-center -->

                <div class="products">
                    <div class="row justify-content-center">


                      @foreach ($products as $key => $item)
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="product product-7 text-center">
                                <figure class="product-media">

                                    <a href="{{ route('SingleProduct', $item->id) }}">
                                        <img src="{{ asset('images/' . $item->thumbnail) }}" alt="Product image" class="product-image">
                                        @foreach ($item->gallery as $img)

                                        <img src="{{ asset('gallery/'.$img->created_at->format('Y/m/'). $img->product_id.'/'.$img->images) }}" alt="Product image" class="product-image-hover">
                                        @endforeach
                                    </a>

                                    <div class="product-action-vertical">
                                        <a href="{{ route('WishAdd', [$item->id, $item->category_id, $item->subcategory_id, $item->brand_id]) }}" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                    </div><!-- End .product-action-vertical -->
                                    <form action="{{ route('AddToCart') }}" method="post">
                                    @csrf

                                    <div class="product-action">
                                        <a type="submit" class="btn-product btn-cart"><span>add to cart</span></a>
                                    </div>
                                    <!-- End .product-action -->
                                    </form>
                                </figure><!-- End .product-media -->

                                <div class="product-body">
                                    <div class="product-cat">
                                        <a href="{{ route('SingleProduct', $item->id) }}">{{ $item->Category->category_name }}</a>
                                    </div><!-- End .product-cat -->
                                    <h3 class="product-title"><a href="product.html">{{ $item->title }}</a></h3><!-- End .product-title -->
                                    <div class="product-price">
                                        <span class="new-price">&#x9F3; {{ $item->price }}</span>
                                        <!-- <span class="old-price">Was $6.99</span> -->
                                    </div><!-- End .product-price -->
                                </div><!-- End .product-body -->
                            </div><!-- End .product -->
                        </div><!-- End .col-sm-6 col-md-4 col-lg-3 -->

                    @endforeach



                </div><!-- End .row -->
                </div><!-- End .products -->

                <div class="more-container text-center mt-2">
                    <a href="#" class="btn btn-outline-dark-2 btn-more"><span>show more</span></a>
                </div><!-- End .more-container -->
            </div><!-- End .container -->

            <div class="pb-3">
                <div class="container brands pt-5 pt-lg-7 ">

                    <h2 class="title text-center mb-4">shop by brands</h2><!-- End .title text-center -->

                    <div class="owl-carousel owl-simple" data-toggle="owl"
                        data-owl-options='{
                            "nav": false,
                            "dots": false,
                            "margin": 30,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":2
                                },
                                "420": {
                                    "items":3
                                },
                                "600": {
                                    "items":4
                                },
                                "900": {
                                    "items":5
                                },
                                "1024": {
                                    "items":6
                                }
                            }
                        }'>

                        @foreach($brand as $br)

                        <a href="#" class="brand">
                            <img style="width: 150px !important" src="{{ asset('images/'. $br->logo) }}" alt="Brand Name">
                        </a>
                        @endforeach

                    </div><!-- End .owl-carousel -->
                </div><!-- End .container -->

                <div class="mb-5 mb-lg-7"></div><!-- End .mb-5 -->

                <div class="container newsletter">
                    <div class="row">
                        <div class="col-lg-6 banner-overlay-div">
                            <div class="banner banner-overlay">
                                <a href="#">
                                    <img src="{{ asset('frontend/assets/images/demos/demo-6/banners/banner-3.jpg') }}" alt="Banner">
                                </a>

                                <div class="banner-content banner-content-center">
                                    <h4 class="banner-subtitle text-white"><a href="#">Limited time only.</a></h4><!-- End .banner-subtitle -->
                                    <h3 class="banner-title text-white"><a href="#">End of Season<br>save 50% off</a></h3><!-- End .banner-title -->
                                    <a href="#" class="btn btn-outline-white banner-link underline">Shop Now</a>
                                </div><!-- End .banner-content -->
                            </div><!-- End .banner -->
                        </div><!-- End .col-lg-6 -->

                        <div class="col-lg-6 d-flex align-items-stretch subscribe-div">
                            <div class="cta cta-box">
                                <div class="cta-content">
                                    <h3 class="cta-title">Subscribe To Our Newsletter</h3><!-- End .cta-title -->
                                    <p>Sign up now for <span class="primary-color">10% discount</span> on first order. Customise my news:</p>

                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Enter your Email Address" aria-label="Email Adress" required>
                                        <div class="text-center">
                                            <button class="btn btn-outline-dark-2" type="submit"><span>subscribe</span></i></button>
                                        </div><!-- End .text-center -->
                                    </form>
                                </div><!-- End .cta-content -->
                            </div><!-- End .cta -->
                        </div><!-- End .col-lg-6 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .bg-gray -->

            <div class="mb-2"></div><!-- End .mb-5 -->

            <div class="container">
            </div><!-- End .container -->

            <div class="blog-posts mb-5">
                <div class="container">
                    <h2 class="title text-center mb-4">Our Store</h2><!-- End .title text-center -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="{{ asset('frontend/assets/images/team/member-1.jpg') }}" alt="member photo">

                                    <figcaption class="member-overlay">
                                        <div class="member-overlay-content">
                                            <h3 class="member-title">Samanta Grey<span>Founder &amp; CEO</span></h3><!-- End .member-title -->
                                            <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                            <div class="social-icons social-icons-simple">
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            </div><!-- End .soial-icons -->
                                        </div><!-- End .member-overlay-content -->
                                    </figcaption><!-- End .member-overlay -->
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Samanta Grey<span>Founder &amp; CEO</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="{{ asset('frontend/assets/images/team/member-2.jpg') }}" alt="member photo">

                                    <figcaption class="member-overlay">
                                        <div class="member-overlay-content">
                                            <h3 class="member-title">Bruce Sutton<span>Sales &amp; Marketing Manager</span></h3><!-- End .member-title -->
                                            <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                            <div class="social-icons social-icons-simple">
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            </div><!-- End .soial-icons -->
                                        </div><!-- End .member-overlay-content -->
                                    </figcaption><!-- End .member-overlay -->
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Bruce Sutton<span>Sales &amp; Marketing Manager</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->

                        <div class="col-md-4">
                            <div class="member member-anim text-center">
                                <figure class="member-media">
                                    <img src="{{ asset('frontend/assets/images/team/member-3.jpg') }}" alt="member photo">

                                    <figcaption class="member-overlay">
                                        <div class="member-overlay-content">
                                            <h3 class="member-title">Janet Joy<span>Product Manager</span></h3><!-- End .member-title -->
                                            <p>Sed pretium, ligula sollicitudin viverra, tortor libero sodales leo, eget blandit nunc.</p>
                                            <div class="social-icons social-icons-simple">
                                                <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                                <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                                <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                            </div><!-- End .soial-icons -->
                                        </div><!-- End .member-overlay-content -->
                                    </figcaption><!-- End .member-overlay -->
                                </figure><!-- End .member-media -->
                                <div class="member-content">
                                    <h3 class="member-title">Janet Joy<span>Product Manager</span></h3><!-- End .member-title -->
                                </div><!-- End .member-content -->
                            </div><!-- End .member -->
                        </div><!-- End .col-md-4 -->
                    </div>
                </div><!-- End .container -->
            </div><!-- End .blog-posts -->
        </main><!-- End .main -->

  @endsection
