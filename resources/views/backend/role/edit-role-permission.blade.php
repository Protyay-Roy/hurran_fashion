@extends('backend.master')

@section('role')
    active
@endsection


@section('content')

<div class="sl-pagebody">

    <div class="row row-sm mg-t-20">

        <div class="col-xl-12 mg-t-25 mg-xl-t-0">
          <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
            <form action="{{ route('ChangePermissionRole') }}" method="post">
              @csrf
              <h3>{{ $role->name }}</h3>
              {{-- <h5></h5> --}}

            <div class="row" style="margin-top: 10px">
              <label class="col-sm-4 form-control-label" style="display: block">Permission: <span class="tx-danger">*</span></label>
              <div class="col-sm-8 mg-t-10 mg-sm-t-0">

                <input type="hidden" name="role_id" value="{{ $role->id }}">
                  @foreach ($permissions as $permission)
                  <li style="list-style: none;">
                  <input type="checkbox" name="permission[]" value="{{ $permission->name }}" {{ $role->hasPermissionTo($permission->name) ? "checked" : '' }}><span>{{ $permission->name }}</span>
                  </li>
                  @endforeach

              </div>
            </div><!-- row -->

            <div class="form-layout-footer text-center">
              <button style="margin-top: 30px; margin-top: 30px; margin-left: -190px; padding: 12px 60px;" type="submit" class="btn btn-info">Change Permission</button>
            </div><!-- form-layout-footer -->

          </form><!-- form-layout-footer -->
          </div><!-- card -->
        </div><!-- col-6 -->
      </div>


</div>
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
})


@if(session('role'))
  Toast.fire({
  icon: 'success',
  title: '{{ session('role') }}'
});
@endif


});

</script>
