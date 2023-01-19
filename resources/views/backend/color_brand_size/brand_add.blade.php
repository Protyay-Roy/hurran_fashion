@extends('backend.master')

@section('products')
  active
 @endsection

@section('content')


<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Add Brand</h5>
    </div><!-- sl-page-title -->

    <div class="row row-sm mg-t-20">
      <div class="col-xl-10 m-auto">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <form action="{{ route('BrandPost') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
              <label for="brand_name" class="col-sm-4 form-control-label">Brand Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="brand_name" class="form-control" placeholder="Enter Brand Name">
              </div>
            </div>
            <!-- row -->

            <div class="row" style="margin-top: 5px;">
              <label class="col-sm-4 form-control-label">Brand Logo: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="file" name="logo" class="form-control" placeholder="Enter Brand Logo">
              </div>
            </div>

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





});

</script>
