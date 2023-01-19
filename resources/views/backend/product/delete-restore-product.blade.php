@extends('backend.master')
@section('products_dlt_res')
    active
@endsection

@section('content')

<div class="sl-pagebody">
    <div class="sl-page-title">
      <h5>Total Products ({{ $product_tr_count }})</h5>
    </div><!-- sl-page-title -->

    <div class="card pd-20 pd-sm-40 mg-t-50">

      <div class="table-responsive">
        <table class="table table-hover mg-b-0">
          <thead>
            <tr>
              <th>SL#</th>
              <th>Title</th>
              <th>Image</th>
              <th>Price</th>
              <th>Size</th>
              <th>Image</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($product_trush as $key => $product)
            <tr>
              <td>
               {{ $product_trush->firstItem() + $key }}
              </td>
              <td>{{ $product->title }}</td>
              <td><img style="width: 150px" src="{{ asset('images/'. $product->thumbnail) }}" alt="thumbnail"></td>
              <td>{{ $product->price ?? 'N/A'}}</td>

              <td>
                @foreach (App\Models\Attribute::where('product_id', $product->id)->get() as $test)
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


              <td>
              <a href="{{ route('ProductRestore', $product->id) }}"class="btn btn-purple" style="margin-bottom: 2px;">Restore</a>

              <a href="{{ route('ProPermanentDelete', $product->id) }}"class="btn btn-danger" style="margin-top: 5px;">Permanent Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $product_trush->links() }}
      </div><!-- table-responsive -->
    </div><!-- card -->



  </div>

@endsection



<script src="//ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
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
