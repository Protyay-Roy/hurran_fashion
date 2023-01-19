@extends('backend.master')

@section('coupons')
  active
 @endsection


@section('content')

<div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>All Coupons</h5>
          <a class="btn btn-primary" href="{{ route('CouponsAdd') }}" style="float: right;"><i class="fa fa-plus"></i> ADD COUPON</a>
        </div><!-- sl-page-title -->


        <div class="card pd-20 pd-sm-40 mg-t-50">

          <div class="table-responsive">
            <form action="{{ route('SelectedCouponDelete') }}" method="post">
              @csrf
            <table id="example" class="table display table-hover mg-b-0">
              <thead>
                <tr>
                  <th ><input type="checkbox" id="CheakAll">SelectAll</th>

                  <th>SL#</th>
                  <th>Name</th>
                  <th>Code</th>
                  <th>Validity Date</th>
                  <th>Discount</th>
                  <th>Level</th>
                  <th>Created At</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>

                @foreach($coupon as $key => $item)

                <tr>
                <td><input type="checkbox" name="coupon_id[]" value="{{ $item->id }}"></td>
                  <td>
                   {{ $coupon->firstItem() + $key }}
                  </td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->code }}</td>
                  <td>{{ $item->validity }}</td>
                  <td>{{ $item->discount }}%</td>
                  <td>{{ $item->level }}</td>
                  <td>{{ $item->created_at->format('d-M-Y')}}</td>
                  <td>
                    <a href="{{ route('Coupon_edit', $item->id) }}"class="btn btn-purple">Edit</a>
                    <a href="{{ route('CouponDelete', $item->id) }}"class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                @endforeach
                </tbody>

                <tr class="text-center">
                <td colspan="10"><button class="btn btn-outline-danger" style="cursor: pointer">Delete</button></td>
                </tr>

                </table>
              </form>


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
