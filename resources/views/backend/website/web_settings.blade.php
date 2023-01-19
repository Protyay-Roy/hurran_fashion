@extends('backend.master')
@section('web')
active
@endsection


@section('content')



<div class="sl-pagebody">
  <div class="sl-page-title">
    <h5>WEBSITE DETAILS</h5>
  </div><!-- sl-page-title -->

  <div class="row row-sm mg-t-20">
    <div class="col-xl-10 m-auto">
      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
        <form action="{{ route('WebsiteUpdate') }}" method="POST" enctype="multipart/form-data">
          @csrf

          @foreach($wesite as $web)



          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Service Number: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="service_number" value="{{ $web->service_number }}" class="form-control">
            </div>
          </div><!-- row -->

          <input type="hidden" name="id" value="{{ $web->id }}" class="form-control">

          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Service Email: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="email" name="service_email" value="{{ $web->service_email }}" class="form-control">
            </div>
          </div>
          <!-- row -->


           <div class="row mg-t-20">
            <label for="facebook_link" class="col-sm-4 form-control-label">Facebook Link: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <textarea name="facebook_link" id="facebook_link" class="col-sm-12 mg-t-10 mg-sm-t-0">{{ $web->facebook_link }}"</textarea>
            </div>
          </div>

           {{-- Instagram --}}

           <div class="row mg-t-20">
            <label for="instagram_link" class="col-sm-4 form-control-label">Instagram: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <textarea name="instagram_link" id="instagram_link" class="col-sm-12 mg-t-10 mg-sm-t-0">{{ $web->instagram_link }}"</textarea>
            </div>
          </div>


          <div class="row">
            <label class="col-sm-4 form-control-label">Website Logo: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="file" name="logo" id="upload_file" onchange="getImagePreview(event)" class="form-control">
            </div>
          </div>
          <!-- row -->


          <div class="row">
            <div id="preview" style="text-align: center;margin: 10px 300px;"></div>
          </div>



          <div class="form-layout-footer mg-t-30 text-center">
            <button class="btn btn-info mg-r-5">Save</button>
          </div><!-- form-layout-footer -->
          @endforeach
        </form>
      </div><!-- card -->
    </div><!-- col-6 -->
  </div><!-- row -->


</div><!-- sl-pagebody -->



@endsection







<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>



  function getImagePreview(event){
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg= document.createElement('img');
    newimg.src=image;
    newimg.width="300";
    imagediv.appendChild(newimg);
  }


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
