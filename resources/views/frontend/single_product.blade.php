@extends('frontend.master')
@section('title')
{{$product->title}}
@endsection
@section('content')

<main class="main">
          <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
              <div class="container d-flex align-items-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="{{ route('front') }}">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Products</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Default</li>
                  </ol>
              </div><!-- End .container -->
          </nav><!-- End .breadcrumb-nav -->

          <div class="page-content">
              <div class="container">
                  <div class="product-details-top">
                      <div class="row">
                          <div class="col-md-6">
                              <div class="product-gallery product-gallery-vertical">
                                <form action="{{ route('AddToCart') }}" method="post">
                                    @csrf
                                  <div class="row">
                                      <figure class="product-main-image">
                                          <img id="product-zoom" src="{{asset('images/'.$product->thumbnail)}}" data-zoom-image="{{asset('images/'.$product->thumbnail)}}" alt="product image">

                                          <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                              <i class="icon-arrows"></i>
                                          </a>
                                      </figure><!-- End .product-main-image -->
                                      
                                      <div id="product-zoom-gallery" class="product-image-gallery">
                                        @foreach ($gallery as $gal)
                                          <a class="product-gallery-item" href="#" data-image="{{asset('gallery/'.$gal->created_at->format('Y/m/').$gal->product_id.'/'.$gal->images)}}" data-zoom-image="{{asset('gallery/'.$gal->created_at->format('Y/m/').$gal->product_id.'/'.$gal->images)}}">
                                              <img src="{{asset('gallery/'.$gal->created_at->format('Y/m/').$gal->product_id.'/'.$gal->images)}}" alt="product side">
                                          </a>
                                          @endforeach
                                      </div><!-- End .product-image-gallery -->
                                  </div><!-- End .row -->
                                  
                              </div><!-- End .product-gallery -->
                          </div><!-- End .col-md-6 -->

                          <div class="col-md-6">
                              <div class="product-details">
                                  <h1 class="product-title">{{$product->title}}</h1><!-- End .product-title -->

                                  <div class="ratings-container">
                                      <div class="ratings">
                                          <div class="ratings-val" style="width: {{ $review->count() == 0 ? '0' : $review->sum('rating')/$review->count() * 20 }}%"></div><!-- End .ratings-val -->
                                      </div><!-- End .ratings -->
                                      <a class="ratings-text" href="#product-review-link" id="review-link">( {{ $review->count() }} Reviews )</a>
                                  </div><!-- End .rating-container -->

                                  <div class="product-price">
                                      ৳ {{$product->price}}
                                  </div><!-- End .product-price -->

                                  <div class="product-content">
                                      <p>{{$product->summary}}</p>
                                  </div><!-- End .product-content -->

                                  <div class="details-filter-row details-row-size">
                                      <label>Color:</label>

                                      <div class="product-nav product-nav-thumbs">
                                          <select name="color_id" class="form-control color_id" data-product="{{$product->id}}">
                                        @foreach ($groupBy as $color)
                                              <option class="input" name="color_id" id="color_id" data-product="{{ $color[0]->product_id }}" value="{{ $color[0]->color_id }}">{{ $color[0]->color->color_name }}</option>
                                              @endforeach
                                          </select>
                                          
                                      </div><!-- End .product-nav -->
                                  </div><!-- End .details-filter-row -->

                                  <div class="details-filter-row details-row-size">
                                      <label for="size">Size:</label>
                                      <div class="select-custom">
                                          <select name="size_id" class="form-control sizeadd">
                                        @foreach ($product->attributes as $size)
                                              <option class="input" name="size_id" id="size_id" value="{{ $size->id }}">{{ $size->size->size_name }}</option>
                                              @endforeach
                                          </select>
                                      </div><!-- End .select-custom -->

                                      <a href="#" class="size-guide"><i class="icon-th-list"></i>size guide</a>
                                  </div><!-- End .details-filter-row -->

                                  <div class="details-filter-row details-row-size">
                                      <label for="qty">Qty:</label>
                                      <div class="product-details-quantity">
                                            <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" step="1" required="">
                                        </div>
                                  </div><!-- End .details-filter-row -->
                                  <div class="product-details-action">
                                       <!-- <a class="btn-product btn-cart"><span>add to cart</span></a> -->
                                       <button type="submit" class="btn-product btn-cart" name="button">add to cart</button>
                                      <input type="hidden" name="product_id" value="{{ $product->id }}">
                                      <div class="details-action-wrapper">
                                          <a href="{{ route('WishAdd', [$product->id, $product->category_id, $product->subcategory_id, $product->brand_id]) }}" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                      </div><!-- End .details-action-wrapper -->
                                  </div><!-- End .product-details-action -->
                                  </form>
                                  <div class="product-details-footer">
                                      <div class="product-cat">
                                          <span>Category:</span>
                                          <a href="#">{{ $product->Category->category_name }}</a>
                                      </div><!-- End .product-cat -->

                                      <div class="social-icons social-icons-sm">
                                          <span class="social-label">Share:</span>
                                          <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                          <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                          <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                          <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                      </div>
                                  </div><!-- End .product-details-footer -->
                              </div><!-- End .product-details -->
                          </div><!-- End .col-md-6 -->
                      </div><!-- End .row -->
                  </div><!-- End .product-details-top -->

                  <div class="product-details-tab">
                      <ul class="nav nav-pills justify-content-center" role="tablist">
                          <li class="nav-item">
                              <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping &amp; Returns</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews ({{ $review->count() }})</a>
                          </li>
                      </ul>
                      <div class="tab-content">
                          <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                              <div class="product-desc-content">
                                  <h3>Product Information</h3>
                                  <p>{{$product->description}}</p>



                          </div><!-- .End .tab-pane -->
                          <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                              <div class="product-desc-content">
                                  <h3>Information</h3>
                                  <p>{{$product->description}}</p>
                              </div><!-- End .product-desc-content -->
                          </div><!-- .End .tab-pane -->
                          <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                              <div class="product-desc-content">
                                  <h3>Delivery &amp; returns</h3>
                                  <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                  We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                              </div><!-- End .product-desc-content -->
                          </div><!-- .End .tab-pane -->
                          <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                              <div class="reviews">
                                  <h3>Reviews ({{ $review->count() }})</h3>

                                  @foreach ($review as $item)
                                  <div class="review">
                                      <div class="row no-gutters">
                                          <div class="col-auto">
                                              <h4><a href="#">{{ $item->name }}</a></h4>
                                              <div class="ratings-container">
                                                  <div class="ratings">
                                                      <div class="ratings-val" style="width: {{ $review->count() == 0 ? '0' : $review->sum('rating')/$review->count() * 20 }}%"></div><!-- End .ratings-val -->
                                                  </div><!-- End .ratings -->
                                              </div><!-- End .rating-container -->
                                              <span class="review-date">{{ $item->created_at->format('d/M/Y - h:i A') }}</span>
                                          </div><!-- End .col -->
                                          <div class="col">
                                              <h4>Good</h4>
                                              <div class="review-content">
                                                  <p>{{ $item->massage }}</p>
                                              </div><!-- End .review-content -->
                                          </div><!-- End .col-auto -->
                                      </div><!-- End .row -->
                                  </div><!-- End .review -->
                                  @endforeach


                              </div><!-- End .reviews -->
                          </div><!-- .End .tab-pane -->
                      </div><!-- End .tab-content -->
                  </div><!-- End .product-details-tab -->

                  <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

                  <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow owl-loaded owl-drag" data-toggle="owl" data-owl-options="{
                          &quot;nav&quot;: false,
                          &quot;dots&quot;: true,
                          &quot;margin&quot;: 20,
                          &quot;loop&quot;: false,
                          &quot;responsive&quot;: {
                              &quot;0&quot;: {
                                  &quot;items&quot;:1
                              },
                              &quot;480&quot;: {
                                  &quot;items&quot;:2
                              },
                              &quot;768&quot;: {
                                  &quot;items&quot;:3
                              },
                              &quot;992&quot;: {
                                  &quot;items&quot;:4
                              },
                              &quot;1200&quot;: {
                                  &quot;items&quot;:4,
                                  &quot;nav&quot;: true,
                                  &quot;dots&quot;: false
                              }
                          }
                      }">
                      <!-- End .product -->

                      <!-- End .product -->

                      <!-- End .product -->

                      <!-- End .product -->

                      <!-- End .product -->
                  <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1485px;">
                    <form action="{{ route('AddToCart') }}" method="post">
                        @csrf
                    @foreach(App\Models\Product::where('category_id', $product->category_id)->get() as $cat_product)
                    <div class="owl-item active" style="width: 277px; margin-right: 20px;"><div class="product product-7 text-center">
                          <figure class="product-media">
                              <span class="product-label label-new">New</span>
                              <a href="product.html">
                                  <img src="{{asset('images/'.$cat_product->thumbnail)}}" alt="Product image" class="product-image">
                              </a>

                              <div class="product-action-vertical">
                                  <a href="{{ route('WishAdd', [$cat_product->id, $cat_product->category_id, $cat_product->subcategory_id, $cat_product->brand_id]) }}" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                                  <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                              </div><!-- End .product-action-vertical -->

                              <div class="product-action">

                                  <button type="submit" class="btn-product btn-cart" name="button">add to cart</button>
                              </div><!-- End .product-action -->
                          </figure><!-- End .product-media -->

                          <div class="product-body">
                              <div class="product-cat">
                                  <a href="{{ route('SingleProduct', $cat_product->id) }}">{{ $cat_product->Category->category_name }}</a>
                              </div><!-- End .product-cat -->
                              <h3 class="product-title"><a href="{{ route('SingleProduct', $cat_product->id) }}">{{$cat_product->title}}</a></h3><!-- End .product-title -->
                              <div class="product-price">
                                  ৳ {{$cat_product->price}}
                              </div><!-- End .product-price -->
                              <div class="ratings-container">
                                  <div class="ratings">
                                      <div class="ratings-val" style="width: {{ $review->count() == 0 ? '0' : $review->sum('rating')/$review->count() * 20 }}%"></div><!-- End .ratings-val -->
                                  </div><!-- End .ratings -->
                                  <span class="ratings-text">( {{ $review->count() }} Reviews )</span>
                              </div><!-- End .rating-container -->

                              <div class="product-nav product-nav-thumbs">
                                @foreach (App\Models\Gallery::where('product_id', $cat_product->id)->get() as $gal)

                                  <a href="#" class="active">
                                      <img src="{{asset('gallery/'.$gal->created_at->format('Y/m/').$gal->product_id.'/'.$gal->images)}}" alt="product desc">
                                  </a>
                                @endforeach
                              </div><!-- End .product-nav -->
                          </div><!-- End .product-body -->
                      </div>
                    </div>
                  @endforeach
                </form>




                    </div>

                  </div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="icon-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="icon-angle-right"></i></button></div><div class="owl-dots disabled"></div></div><!-- End .owl-carousel -->
              </div><!-- End .container -->
          </div><!-- End .page-content -->
      </main>

@endsection

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function(){
    $('.color_id').change(function(){
        let colorid = $(this).val();
        let productid = $(this).attr('data-product');
        


        $.ajax({
            type:"GET",
            url: "{{ url('product/get/size') }}/" +colorid +'/'+productid,
            success: function(res){
                $('.sizeadd').html(res)

            }
        });
    });



    let input = document.querySelector(".input");
    let button = document.querySelector(".button");

    button.disabled = true; //setting button state to disabled

    input.addEventListener("change", stateHandle);

    function stateHandle() {
        if (document.querySelector(".input").value === "") {
            button.disabled = true; //button remains disabled
        } else {
            button.disabled = false; //button is enabled
        }
    }





  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

@if(session('review'))
Toast.fire({
  icon: 'error',
  title: '{{ session('review') }}'
});
@endif


});
</script>
