@extends('backend.master')

@section('shipping')
  active
@endsection

@section('content')


<div class="col-lg-12 sl-pagebody">
    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
      <h4 class="card-body-title">Payment Status Edit</h4>
      <form action="{{ route('ShippingUpdate') }}" method="post">
        @csrf

      <div class="row text-center">
        <label class="col-sm-4 text-right"><h6>Payment Status</h6><span class="tx-danger">*</span></label>
        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select name="payment_status" id="payment_status" class="form-control">
                <option @if ($shipping->payment_status == "1") selected @endif value="1">Paid</option>
                <option @if ($shipping->payment_status == "2") selected @endif value="2">Pending</option>
              </select>
            </div>



        </div>
      </div>
      <!-- row -->
      <input type="hidden" name="shipping_id" value="{{ $shipping->id }}" class="form-control">


      <div class="row text-center">
        <label class="col-sm-4 text-right"><h6>Delivary Status</h6><span class="tx-danger">*</span></label>
        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
          <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select name="status" id="status" class="form-control">
                <option @if ($shipping->status == "1") selected @endif value="1">Complete</option>
                <option @if ($shipping->status == "2") selected @endif value="2">Pending</option>
              </select>
            </div>
        </div>
      </div>


      <div class="form-layout-footer mg-t-30 text-center">
        <button class="btn btn-info mg-r-5">Save</button>
      </div><!-- form-layout-footer -->
    </form>
    </div><!-- card -->
  </div>



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



});

</script>
