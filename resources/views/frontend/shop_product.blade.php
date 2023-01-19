

<div class="products mb-3">
    <div class="row justify-content-center">
        @foreach ($products as $key => $item)
            <div class="col-6 col-md-4 col-lg-4 col-xl-3">
                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <!-- <span class="product-label label-new"></span> -->
                        <a href="{{ route('SingleProduct', $item->id) }}">
                            <img src="{{ asset('images/' . $item->thumbnail) }}" alt="Product image"
                                class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="{{ route('WishAdd', [$item->id, $item->category_id, $item->subcategory_id, $item->brand_id]) }}"
                                class="btn-product-icon btn-wishlist btn-expandable"><span>add to
                                    wishlist</span></a>
                            <a href="{{ asset('images/' . $item->thumbnail) }}" class="btn-product-icon btn-quickview"
                                title="Quick view"><span>Quick view</span></a>

                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="{{ route('SingleProduct', $item->id) }}" class="btn-product btn-cart"><span>add to
                                    cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">{{ $item->Category->category_name }}</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a
                                href="{{ route('SingleProduct', $item->id) }}">{{ $item->title }}</a>
                        </h3><!-- End .product-title -->
                        <div class="product-price">
                            &#x9F3; {{ $item->price }}
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val"
                                    style="width: {{ $review->count() == 0 ? '0' : ($review->sum('rating') / $review->count()) * 20 }}%">
                                </div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( {{ $review->count() }} Reviews )</span>
                        </div><!-- End .rating-container -->


                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .col-sm-6 col-lg-4 col-xl-3 -->
        @endforeach
    </div><!-- End .row -->
</div><!-- End .products -->

<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled">
            <a class="page-link page-link-prev" href="#" aria-label="Previous" tabindex="-1"
                aria-disabled="true">
                <span aria-hidden="true"><i class="icon-long-arrow-left"></i></span>Prev
            </a>
        </li>
        <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
        </li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item-total">of 6</li>
        <li class="page-item">
            <a class="page-link page-link-next" href="#" aria-label="Next">
                Next <span aria-hidden="true"><i class="icon-long-arrow-right"></i></span>
            </a>
        </li>
    </ul>
</nav>
