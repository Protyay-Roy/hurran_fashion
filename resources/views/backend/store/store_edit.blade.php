@extends('backend.master')
@section('store')
    active
@endsection

@section('content')

<div class="sl-pagebody">
  <div class="sl-page-title">
    <h5>Edit Store</h5>
  </div><!-- sl-page-title -->

  <div class="row row-sm mg-t-20">
    <div class="col-xl-10 m-auto">
      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
        <form action="{{ route('StoreUpdate') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Store Title: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="title" class="form-control" value="{{ $store->title }}">
            </div>
          </div><!-- row -->

          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Store Address: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="address" class="form-control" value="{{ $store->address }}">
            </div>
          </div>

          <!-- row -->
          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Business Hours: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="business_hours" class="form-control" value="{{ $store->business_hours }}">
            </div>
          </div>

          <input type="hidden" name="id" value="{{ $store->id }}">
          <!-- row -->
          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Contact Number: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="contact" class="form-control" value="{{ $store->contact }}">
            </div>
          </div>



          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Store Thumbnail: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="file" name="thumbnail" class="form-control">
            </div>
          </div>



           <div class="row mg-t-20">
            <label for="link" class="col-sm-4 form-control-label">Link: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="link" class="form-control" value="{{ $store->link }}">
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




<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script>
  $(document).ready(function(){



  });


</script>
