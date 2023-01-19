
@extends('backend.master')
@section('users')
    active
@endsection

@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Total Users ( {{ $user_count }} )</h5>
    </div><!-- sl-page-title -->



    <div class="card pd-20 pd-sm-40 mg-t-50">

      <div class="table-responsive">
        <table id="example" class="table display table-hover mg-b-0">
          <thead>
            <tr>
              <th>SL#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Registered Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $key => $user)

            <tr>
              <td>
               {{ $users->firstItem() + $key }}
              </td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email ?? 'N/A'}}</td>
              <td>{{ $user->created_at->format('d-M-Y l')}}</td>
              <td>
                <a href="{{ route('UsersEdit', $user->id) }}" class="btn btn-purple">Edit</a>

                <a href="#" id="delete" class="btn btn-danger">Delete</a>

              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $users->links() }}
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


$('#delete').click(function(){
Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    document.location.href="{!! route('UsersDelete', $user->id); !!}";
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
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
  title: "{{ session('delete2') }}"
});
@endif



@if(session('SCatUpdate'))
Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: "{{ session('SCatUpdate') }}",
    showConfirmButton: false,
    timer: 1500
})
@endif


});

</script>
