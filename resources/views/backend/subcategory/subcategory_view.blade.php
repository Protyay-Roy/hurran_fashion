@extends('backend.master')

 @section('view_subcategory')
  active
 @endsection

@section('content')

<div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>SubCategory Views</h5>
          <a href="{{ url('subcategory-from') }}" style="float: right;"><i class="fa fa-plus"></i> Add</a>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40 mg-t-50">

          <div class="table-responsive">
            <table class="table table-hover mg-b-0">
              <thead>
                <tr>
                  <th>SL#</th>
                  <th>Name</th>
                  <th>Slug</th>
                  <th>Category Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($scategories as $key => $item)

                <tr>
                  <td>
                   {{ $scategories->firstItem() + $key }}
                  </td>
                  <td>{{ $item->subcategory_name }}</td>
                  <td>{{ $item->slug ?? 'N/A'}}</td>
                  <td>{{ $item->get_category->category_name ?? "" }}</td>
                  <td>
                    <a href="{{ url('subcategory-edit', $item->id) }}"class="btn btn-purple">Edit</a>
                    <a href="{{ url('subcategory-delete', $item->id) }}"class="btn btn-danger">Delete</a>
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
  title: "{{ session('delete2') }}"
});
@endif



@if(session('SCatAdd'))
Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: "{{ session('SCatAdd') }}",
    showConfirmButton: false,
    timer: 1500
})
@endif


});

</script>
