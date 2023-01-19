@extends('backend.master')

@section('coupons')
  active
 @endsection

@section('content')


<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Add Coupon</h5>
    </div><!-- sl-page-title -->

    <div class="row row-sm mg-t-20">
      <div class="col-xl-10 m-auto">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <form action="{{ route('CouponsPost') }}" method="POST">
            @csrf


            <div class="row" style="margin-bottom: 15px;">
              <label for="name" class="col-sm-4 form-control-label">Coupon Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="name" class="form-control" placeholder="Enter Coupon Name" required>
              </div>
            </div><!-- row -->

            <div class="row" style="margin-bottom: 15px;">
              <label for="code" class="col-sm-4 form-control-label">Coupon Code: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="code" class="form-control" placeholder="Enter Coupon Code" required>
              </div>
            </div><!-- row -->


            <div class="row" style="margin-bottom: 15px;">
              <label for="validity" class="col-sm-4 form-control-label">Coupon Validity Date: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="datetime-local" name="validity" class="form-control" placeholder="Enter Coupon Validity Date" required>
              </div>
            </div><!-- row -->

            <div class="row" style="margin-bottom: 15px;">
              <label for="discount" class="col-sm-4 form-control-label">Coupon Discount: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="discount" class="form-control" placeholder="Enter Coupon Discount" required>
              </div>
            </div><!-- row -->

            <div class="row" style="margin-bottom: 15px;">
              <label for="level" class="col-sm-4 form-control-label">Discount Level: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="level" class="form-control" placeholder="Enter Discount Level" required>
              </div>
            </div><!-- row -->


            <div class="form-layout-footer mg-t-30 text-center">
              <button class="btn btn-info mg-r-5">Save</button>
            </div><!-- form-layout-footer -->
          </form>
        </div><!-- card -->
      </div><!-- col-6 -->
    </div><!-- row -->


  </div><!-- sl-pagebody -->

@endsection




<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function(){
$('#CheakAll').click(function(){
  $('input:checkbox').not(this).prop('checked', this.checked);
});



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
});



@if(session('delete1'))
Toast.fire({
  icon: 'error',
  title: '{{ session('delete1') }}'
});
@endif


@if(session('success'))
  Toast.fire({
  icon: 'success',
  title: "{{ session('success') }}"
});
@endif



@if(session('CategoryAdd'))
Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: "{{ session('
    success ') }}",
    showConfirmButton: false,
    timer: 1500
})
@endif


});

</script>
