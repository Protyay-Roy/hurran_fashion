@extends('backend.master')
@section('orders')
    active
@endsection

@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Total Orders ({{ $order_count }})</h5>
    </div><!-- sl-page-title -->

    {{-- style="display: inline-table; margin-right: 25px;" style="margin-right: -80px;" style="display: inline-block;"
    style="display: inline-block;" --}}

    <div class="row">
        <div class="col-lg-4">
          <a href="{{ route('ExcelDownload') }}"  class="btn btn-success text-right">Download Excel</a>
          <a href="{{ route('PDFDownload') }}" style="margin: -40px 150px auto; padding: 10px 16px;"  class="btn btn-success text-right">Download PDF</a>
        </div>

        <div class="col-lg-4 text-center">
          <form action="{{ route('ExcelImport') }}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="excel" style="margin-right: -80px">
            <input type="submit" style="margin-left: 15px;" class="btn btn-success" value="Upload Excel">
          </form>
        </div>
    </div>

    <div class="card pd-20 pd-sm-40 mg-t-50">

      <div class="table-responsive">
        <!-- <form action="{{ route('SelectedOrderDelete') }}" method="post">
          @csrf -->

        <table class="table table-hover display mg-b-0" id="example" style="width:100%">
          <thead>
            <tr>
              <th><input type="checkbox" id="CheakAll">SelectAll</th>
              <th>SL#</th>
              <th>Shipping Id</th>
              <th>Product Name</th>
              <th>Color Name</th>
              <th>Size Name</th>
              <th>Quantity</th>
              <th>Unit Price</th>
              <th>Total Unit Price</th>
              <th>Order Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($orders as $key => $order)

            <tr>
              <td><input type="checkbox" name="order_id[]" value="{{ $order->id }}"></td>
              <td>
               {{ $orders->firstItem() + $key }}
              </td>
              <td>{{ $order->shipping_id ?? 'N/A'}}</td>
              <td>{{ $order->product->title ?? 'N/A'}}</td>
              <td>{{ $order->get_color->color_name ?? 'N/A'}}</td>
              <td>{{ $order->get_size->size_name ?? 'N/A'}}</td>
              <td>{{ $order->quantity ?? 'N/A'}}</td>
              <td>{{ $order->product_unit_price ?? 'N/A'}}</td>
              <td>{{ $order->quantity * $order->product_unit_price ?? 'N/A'}}</td>
              <td>{{ $order->created_at }}</td>
              <td>
                <a href="{{ route('OrderShipment', $order->id) }}" style="margin-left: -54px;"><button class="btn btn-icon waves-effect waves-light btn-primary" style="border-radius: 50%; cursor: pointer;" name="button"><i style="padding: 8px;" class="fa fa-eye"></i></button></a>
                <a href="{{ route('SinglePDFDownload', $order->id) }}"><button class="btn btn-icon waves-effect waves-light btn-success" style="border-radius: 50%; cursor: pointer;" name="button"><i style="padding: 8px;" class="fa fa-download"></i></button></a>
                <a href="{{ route('OrdersDelete', $order->id) }}"><button class="btn btn-icon waves-effect waves-light btn-danger" style="border-radius: 50%; cursor: pointer;" name="button"><i style="padding: 8px;" class="fa fa-trash"></i></button></a>
              </td>
            </tr>
            @endforeach

          </tbody>
          <!-- <tr class="text-center">
          <td colspan="10"><button class="btn btn-outline-danger" style="cursor: pointer">Delete</button></td>
          </tr> -->
        </table>
        <!-- </form> -->
        {{ $orders->links() }}
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
})
  @if(session('success'))
  Toast.fire({
  icon: 'success',
  title: "{{ session('success') }}"
});
@endif


@if(session('delete1'))
Toast.fire({
icon: 'success',
title: "{{ session('delete1') }}"
});
@endif


});

</script>
