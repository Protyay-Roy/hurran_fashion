@extends('frontend.master')

@section('name')
    
@endsection

@section('title')
 Wish Page
@endsection

@section('content')
    
<main class="main">
        	<div class="page-header text-center" style="background-image: url('assets/images/page-header-bg.jpg')">
        		<div class="container">
        			<h1 class="page-title">Wishlist</h1>
        		</div><!-- End .container -->
        	</div><!-- End .page-header -->
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Wishlist</li>
                    </ol>
                </div><!-- End .container -->
            </nav><!-- End .breadcrumb-nav -->

            <div class="page-content">
            	<div class="container">
                
					<table class="table table-wishlist table-mobile">
						<thead>
							<tr>
								<th>Product</th>
								<th>Price</th>
								<th>Stock Status</th>
								<th></th>
								<th></th>
							</tr>
						</thead>

						<tbody>
                        @foreach ($wish as $wish)
							<tr>
								<td class="product-col">
									<div class="product">
										<figure class="product-media">
											<a href="{{ route('SingleProduct', $wish->product->id) }}">
												<img src="{{ asset('images/'.$wish->product->thumbnail) }}" alt="Product image">
											</a>
										</figure>

										<h3 class="product-title">
											<a href="{{ route('SingleProduct', $wish->product->id) }}">{{ $wish->product->title }}</a>
										</h3><!-- End .product-title -->
									</div><!-- End .product -->
								</td>
								<td class="price-col">৳{{ number_format($wish->product->price, 2) }}</td>
								<td class="stock-col"><span class="in-stock">
                                @foreach ($attr as $qty)
                                    @endforeach
                                    @if ($wish->product_id == $qty->quantity > 2)
                                        In Stock
                                    @else
                                        Out of Stock
                                    @endif
                                </span></td>
								<td class="action-col">
								    <a href="{{ route('SingleProduct', $wish->product->id) }}"><button class="btn btn-block @if ($wish->product_id == $qty->quantity < 2) disabled @endif btn-outline-primary-2"><i class="icon-cart-plus"></i>Add to Cart</button></a>
								</td>
								<td class="remove-col">
                                    <a href="{{ route('WishProductDelete', $wish->id) }}"><button class="btn-remove"><i class="icon-close"></i></button></a>
                                </td>
							</tr>
                        @endforeach	
						</tbody>
					</table><!-- End .table table-wishlist -->
                
	            	<div class="wishlist-share">
	            		<div class="social-icons social-icons-sm mb-2">
	            			<label class="social-label">Share on:</label>
	    					<a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
	    					<a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
	    					<a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
	    					<a href="#" class="social-icon" title="Youtube" target="_blank"><i class="icon-youtube"></i></a>
	    					<a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
	    				</div><!-- End .soial-icons -->
	            	</div><!-- End .wishlist-share -->
            	</div><!-- End .container -->
            </div><!-- End .page-content -->
        </main>
   

@endsection



<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(document).ready(function(){

        $('.increment-btn').click(function (e) {
            e.preventDefault();
            var incre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(incre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value<10){
                value++;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }

        });

        $('.decrement-btn').click(function (e) {
            e.preventDefault();
            var decre_value = $(this).parents('.quantity').find('.qty-input').val();
            var value = parseInt(decre_value, 10);
            value = isNaN(value) ? 0 : value;
            if(value>1){
                value--;
                $(this).parents('.quantity').find('.qty-input').val(value);
            }
        });




        $('.changequty').click(function(){
            document.getElementById('incrs_qut').submit();
        });


        var x = document.getElementById("size").options[2].disabled = true;

        
        @if(session('discount_pay'))
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: '{{ session('discount_pay') }}'
        })
        @endif






    })
</script>