@extends('backend.master')
@section('users')
    active
@endsection

@section('content')




<div class="col-lg-12 sl-pagebody">
    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
      <h4 class="card-body-title">User Edit</h4>
      <form action="{{ route('UsersUpdate') }}" method="post" enctype="multipart/form-data">
        @csrf

      <div class="row text-center">
        <label class="col-sm-4 text-right"><h6 style="display: inline-block">Name:</h6><span class="tx-danger">*</span></label>
        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
          <input type="text" name="name" value="{{ $users->name }}" class="form-control" placeholder="Enter Your Name">
        </div>
      </div>
      <!-- row -->
      <input type="hidden" name="user_id" value="{{ $users->id }}" class="form-control">

      <div class="row text-center mg-t-20">
        <label class="col-sm-4 text-right"><h6 style="display: inline-block">Email:</h6><span class="tx-danger">*</span></label>
        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
          <input type="email" name="email" value="{{ $users->email }}" class="form-control" placeholder="Enter email address">
        </div>
      </div>

      <div class="row text-center mg-t-20">
        <label class="col-sm-4 text-right"><h6 style="display: inline-block">Profile Image:</h6><span class="tx-danger">*</span></label>
        <div class="col-sm-6 mg-t-10 mg-sm-t-0">
          <input type="file" name="images" id="upload_file" onchange="getImagePreview(event)" class="form-control" placeholder="Enter Your Profile Image">
        </div>
      </div>

      <div class="row">
        <div id="preview" style="text-align: center;margin: 10px 300px;"></div>
      </div>

      <div class="form-layout-footer mg-t-30 text-center">
        <button type="submit" class="btn btn-info mg-r-5">Save</button>
      </div><!-- form-layout-footer -->
    </form>
    </div><!-- card -->
  </div>




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
