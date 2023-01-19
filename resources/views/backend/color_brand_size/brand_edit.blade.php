@extends('backend.master')

@section('products')
  active
 @endsection

@section('content')


<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Edit Brand</h5>
    </div><!-- sl-page-title -->

    <div class="row row-sm mg-t-20">
      <div class="col-xl-10 m-auto">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <form action="{{ route('BrandUpdate') }}" method="POST" enctype="multipart/form-data">
            @csrf


            <div class="row">
              <label for="color_name" class="col-sm-4 form-control-label">Brand Name: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <input type="text" name="brand_name" class="form-control" value="{{ $brand_edit->brand_name }}">
                <input type="hidden" name="id" value="{{ $brand_edit->id }}">
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




  @if(session('success'))
  Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: "{{ session('success') }}",
      showConfirmButton: false,
      timer: 1500
  })
  @endif


  });

  </script>
