@extends('backend.master')
@section('orders')
    active
@endsection

@section('content')


<form action="#" style="margin-left: 110px;">
		                	<div class="row">


                        <div class="col-lg-10">


                            <div class="card pd-20 pd-sm-40 mg-t-50">

                              <div class="table-responsive">
                                <table class="table table-hover mg-b-0">
                                  <thead>
                                    <tr>
                                      <th>Title</th>
                                      <th>Image</th>
                                      <th>Price</th>
                                      <th>Size</th>
                                      <th>Color</th>
                                      <th>Quantity</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>{{ $order->product->title ?? 'N/A'}}</td>
                                      <td><img style="width: 90px;height: 50px;" src="{{ asset('images/'. $order->product->thumbnail) }}" alt="thumbnail"></td>
                                      <td>{{ $order->quantity * $order->product_unit_price ?? 'N/A'}}</td>
                                      <td>{{ $order->get_size->size_name ?? 'N/A'}}</td>
                                      <td>{{ $order->get_color->color_name ?? 'N/A'}}</td>
                                      <td>{{ $order->quantity ?? 'N/A'}}</td>
                                    </tr>
                                  </tbody>
                                </table>

                              </div><!-- table-responsive -->
                            </div><!-- card -->
                          </div>
		                	</div><!-- End .row -->

                      <div class="row text-center">
                        <div class="col-sm-5">
                        <label style="display: flex;"><h6>Payment Status</h6><span class="tx-danger">*</span></label>


                        <select name="payment_status" id="payment_status" class="form-control" disabled>
                          <option @if ($shipping->payment_status == "1") selected @endif value="1">Paid</option>
                          <option @if ($shipping->payment_status == "2") selected @endif value="2">Pending</option>
                        </select>

                        </div>



                            <div class="col-sm-5">
                            <label style="display: flex;"><h6>Delivary Status</h6><span class="tx-danger">*</span></label>
                            <select name="status" id="status" class="form-control" disabled>
                              <option @if ($shipping->status == "1") selected @endif value="1">Complete</option>
                              <option @if ($shipping->status == "2") selected @endif value="2">Pending</option>
                            </select>

                            </div>
                        </div>

<!-- ORDER DETAILS -->
                      <div style="margin-top: 10px;" class="row">
		                		<div class="col-lg-10">
		                			<h2 class="checkout-title">Clients Details</h2><!-- End .checkout-title -->
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>First Name *</label>
		                						<input type="text" class="form-control" value="{{ $shipping->first_name }}" disabled>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Last Name *</label>
		                						<input type="text" class="form-control" value="{{ $shipping->last_name }}" disabled>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	            						<label>Company Name (Optional)</label>
	            						<input type="text" class="form-control" value="{{ $shipping->company }}" disabled>

	            						<label>Country *</label>
	            						<input type="text" class="form-control" disabled>

	            						<label>Street address *</label>
	            						<input type="text" class="form-control" value="{{ $shipping->address }}" disabled>
	            						<input type="text" class="form-control" disabled>

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Town / City *</label>
		                						<input type="text" class="form-control" value="{{ $shipping->city_id }}" disabled>
		                					</div><!-- End .col-sm-6 -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Postcode / ZIP *</label>
		                						<input type="text" class="form-control" value="{{ $shipping->zipcode }}" disabled>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Phone *</label>
		                						<input type="tel" class="form-control" value="{{ $shipping->phone }}" disabled>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

	                					<label>Email address *</label>
	        							<input type="email" class="form-control" value="{{ $shipping->email }}" disabled>


	                					<label>Order notes (optional)</label>
	        							<textarea class="form-control" cols="30" value="{{ $shipping->note }}" rows="4" disabled></textarea>

		                		</div><!-- End .col-lg-9 -->

		                	</div><!-- End .row -->
                    </div>


            			<div class="text-center" style="margin-top: 20px;margin-left: -230px;">
                  <a href="{{ route('SingleClientPDFDownload', $order->id) }}"><button type="button" style="padding: 16px 40px; font-size: 18px; text-transform: uppercase;border-radius: 50px; cursor: pointer;" class="btn btn-success btn-rounded w-md waves-effect waves-light">Download</button></a>
                  </div>

                </form>

@endsection



<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function(){

  const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})
  @if(session('success'))
  Toast.fire({
  icon: 'success',
  title: "{{ session('success') }}"
});
@endif


@if(session('delete1'))
Toast.fire({
icon: 'success',
title: "{{ session('delete1') }}"
});
@endif


});

</script>
