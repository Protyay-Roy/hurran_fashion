@extends('backend.master')
@section('shipping')
  active
@endsection
@section('content')
<div class="sl-pagebody">
    <div class="sl-page-title">
<form action="{{ route('SelectedShipDelete') }}" method="post">
  @csrf
<table id="example" class="display" style="width:90%">
        <thead>
            <tr>
  <th><input type="checkbox" id="CheakAll">SelectAll</th>
                  <th>SL#</th>
                  <th>F Name</th>
                  <th>L Name</th>
                  <th>Shipping Id</th>
                  <th>Phone</th>
                  <th>Address</th>
                  <th>Pay St</th>
                  <th>Product Delivary</th>
                  <th>Coupon</th>
                  <th>Created</th>
                  <th>Action</th>
            </tr>
        </thead>

  <tbody>   
  @foreach($shippings as $key => $item)

  <tr>


  <td><input type="checkbox" name="ship_id[]" value="{{ $item->id }}"></td>
    <td>
        {{ $shippings->firstItem() + $key }}
    </td>
    <td>{{ $item->first_name }}</td>
    <td>{{ $item->last_name }}</td>
    <td>{{ $item->id }}</td>
    <td>{{ $item->phone }}</td>
    <td>{{ $item->address }}</td>
    <td>{{ ($item->payment_status == "1") ? "Paid" : "Pending" }}</td>
    <td>{{ ($item->status == "1") ? "Complete" : "Pending" }}</td>
    <td>{{ $item->coupon_code }}</td>
    <td>{{ $item->created_at }}</td>
    <td>
      <a href="{{ route('ShippingEdit', $item->id) }}"class="btn btn-purple">Edit</a>
      <a href="{{ route('ShippingDelete', $item->id) }}" class="btn btn-danger">Delete</a>
    </td>
  </tr>
  @endforeach
   </tbody>
  <tr class="text-center">
  <td colspan="10"><button class="btn btn-outline-danger" style="cursor: pointer">Delete</button></td>
  </tr>


     

        




    </table>
</form>

</div>
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




  @if(session('success'))
  Toast.fire({
  icon: 'success',
  title: "{{ session('success') }}"
});
@endif



});

</script>
