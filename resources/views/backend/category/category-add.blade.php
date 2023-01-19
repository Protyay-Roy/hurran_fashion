@extends('backend.master')

@section('add_category')
  active
 @endsection

@section('content')


<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Add Category</h5>
    </div><!-- sl-page-title -->

    <div class="row row-sm mg-t-20">
      <div class="col-xl-10 m-auto">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <form action="{{ route('CategoryPost') }}" method="POST">
            @csrf


            <div class="row">
              <label for="category_name" class="col-sm-4 form-control-label">Category name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="category_name" class="form-control" placeholder="Enter Category name">
              </div>
            </div><!-- row -->
            <div class="row mg-t-20">
              <label for="category_id" class="col-sm-4 form-control-label">Slug: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="slug" class="form-control" placeholder="Enter Category Slug Name">
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


@if(session('delete2'))
  Toast.fire({
  icon: 'success',
  title: '{{ session('delete2') }}'
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
