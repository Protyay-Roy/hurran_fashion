@extends('backend.master')
@section('products')
    active
@endsection

@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Total Products ({{ $product_count }})</h5>
      <a class="btn btn-success waves-effect w-md waves-light" href="{{ route('BrandList') }}">BRAND LIST</a>
      <a class="btn btn-warning btn-rounded w-md waves-effect waves-light" href="{{ route('ColorList') }}">COLOR LIST</a>
      <a class="btn btn-purple btn-rounded w-md waves-effect waves-light" href="{{ route('SizeList') }}">SIZE LIST</a>


      <!-- <a class="btn btn-primary" href="{{ route('ProductAdd') }}" style="float: right;"><i class="fa fa-plus"></i> ADD PRODUCT</a> -->
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40 mg-t-50">

      <div class="table-responsive">
        
        <table id="example" class="display" style="width:100%">
        <thead>
        <tr>
          <th><input type="checkbox" id="CheakAll">SelectAll</th>
              <th>SL#</th>
              <th>Title</th>
              <th>Image</th>
              <th>Price</th>
              <th>Size Color Quantity</th>
              <th>Image</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach($products as $key => $product)
            

            <!-- style="background: #ce4141;" -->
          <?php
            $stock =  App\Models\Attribute::where('product_id', $product->id)->get();
          ?>

          @foreach($stock as $st)
          
          @endforeach

            
            <tr @if($st->quantity < 6) style="background: #f7a11bf0;"  @endif>
                <td><input type="checkbox" name="product_id[]" value="{{ $product->id }}"></td>
              <td>
               {{ $products->firstItem() + $key }}
              </td>
              <td>{{ $product->title }}</td>
              <td><img style="width: 150px" src="{{ asset('images/'. $product->thumbnail) }}" alt="thumbnail"></td>
              <td>{{ $product->price ?? 'N/A'}}</td>

              <td>
                @foreach (App\Models\attribute::where('product_id', $product->id)->get() as $test)
                   <span>Size: {{ $test->size->size_name }}</span>
                   <span>Color: {{ $test->color->color_name }}</span>
                   <span>Qu: {{ $test->quantity }}</span><br>
                @endforeach
              </td>
              <td>
                @foreach ($product->gallery as $img)
              <img style="width: 100px" src="{{ asset('gallery/'.$img->created_at->format('Y/m/'). $img->product_id.'/'.$img->images) }}" alt="thumbnail">
                @endforeach
              </td>

              <td style="text-transform: capitalize;">{{ $product->status }}</td>

              <td>
              <a href="{{ route('ProductEdit', $product->id) }}"class="btn btn-purple" style="margin-bottom: 2px;">Edit</a>
              <a href="{{ route('ProductImageEdit', $product->id) }}"class="btn btn-purple" style="margin-bottom: 2px;">Gallery Edit</a>
              <a href="{{ route('ProductDelete', $product->id) }}"class="btn btn-danger" style="margin-top: 5px;">Delete</a>
              </td>
            </tr>

            @endforeach
            

          </tbody>
          <tr class="text-center">
          <td colspan="10"><button class="btn btn-outline-danger" disabled style="cursor: pointer">Delete</button></td>
          </tr>
        </table>
        
        {{ $products->links() }}
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
  title: '{{ session('success') }}'
});
@endif


});

</script>
