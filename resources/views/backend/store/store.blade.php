@extends('backend.master')
@section('store')
    active
@endsection

@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Total Store ({{ $all_store }})</h5>

      <a class="btn btn-primary" href="{{ route('StoreAdd') }}" style="float: right;"><i class="fa fa-plus"></i> ADD STORE</a>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40 mg-t-50">

      <div class="table-responsive">
        <table id="example" class="table table-hover display mg-b-0">
          <thead>
            <tr>
              <th>SL#</th>
              <th>Store Title</th>
              <th>Store Address</th>
              <th>Business_hours</th>
              <th>Store Contact</th>
              <th>Store Link</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($store as $key => $stores)
            <tr>
              <td>
               {{ $store->firstItem() + $key }}
              </td>
              <td>{{ $stores->title }}</td>
              <td>{{ $stores->address }}</td>
              <td>{{ $stores->business_hours }}</td>
              <td>{{ $stores->contact }}</td>
              <td>{{ $stores->link }}</td>
              <td><img style="width: 150px" src="{{ asset('images/'. $stores->thumbnail) }}" alt="thumbnail"></td>
              <td>
              <a href="{{ route('Store_edit', $stores->id) }}"class="btn btn-purple" style="margin-bottom: 2px;">Edit</a>
              <a href="{{ route('StoreDelete', $stores->id) }}"class="btn btn-danger" style="margin-top: 5px;">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $store->links() }}
      </div><!-- table-responsive -->
    </div><!-- card -->



  </div>

@endsection



<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
$(document).ready(function(){



    $('#example').DataTable( {
            columnDefs: [ {
                orderable: false,
                targets:   0
            } ],
            select: {
                style:    'os',
                selector: 'td:first-child'
            },
            order: [[ 1, 'asc' ]]
        } );

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


@if(session('delete1'))
Toast.fire({
icon: 'error',
title: "{{ session('delete1') }}"
});
@endif


});

</script>
