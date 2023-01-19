@extends('backend.master')

@section('products')
  active
 @endsection


@section('content')

<div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>ALL BRAND({{ $brand_count }})</h5>
          <a class="btn btn-primary" href="{{ route('BrandAdd') }}" style="float: right;"><i class="fa fa-plus"></i> ADD BRAND</a>
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40 mg-t-50">

          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>SL#</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Image</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($brand as $key => $item)

                <tr>
                  <td>
                   {{ $brand->firstItem() + $key }}
                  </td>
                  <td>{{ $item->brand_name }}</td>
                  <td>{{ $item->slug }}</td>
                  <td><img style="width: 150px" src="{{ asset('images/'. $item->logo) }}" alt="logo"></td>
                  <td>{{ $item->created_at->format('d-M-Y l')}}</td>
                  <td>
                    <a href="{{ route('Brand_edit', $item->id) }}"class="btn btn-purple">Edit</a>
                    <a href="{{ route('BrandDelete', $item->id) }}"class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach

              </tbody>
            </table>
          </div><!-- table-responsive -->
        </div><!-- card -->



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
});



@if(session('delete1'))
Toast.fire({
  icon: 'error',
  title: "{{ session('delete1') }}"
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
