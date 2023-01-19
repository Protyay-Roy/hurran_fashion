@extends('backend.master')

 @section('category')
  active
 @endsection
@section('content')

<div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Delete Or Restore Category</h5>
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
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($trush_category as $key => $t_item)

                <tr>


                  <td>{{ $trush_category->firstItem() + $key }}</td>
                  <td>{{ $t_item->category_name ?? 'N/A' }}</td>
                  <td>{{ $t_item->slug ?? 'N/A' }}</td>
                  <td>
                    <a href="{{ route('CategoryRestore', $t_item->id) }}" class="btn btn-success">Restore</a>
                    <a href="{{ route('PermanentDelete', $t_item->id) }}" class="btn btn-danger">Permanent Delete</a>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>

            {{ $trush_category->links() }}
          </div><!-- table-responsive -->
        </div><!-- card -->



      </div>









      <div class="sl-pagebody">
              <div class="sl-page-title">
                <h5>Delete Or Restore Sub Category</h5>
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
                        <th>Main Category</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($trush_S_category as $key => $t_item)

                      <tr>


                        <td>{{ $trush_category->firstItem() + $key }}</td>
                        <td>{{ $t_item->subcategory_name ?? 'N/A' }}</td>
                        <td>{{ $t_item->slug ?? 'N/A' }}</td>
                        <td>{{ $t_item->get_category->category_name ?? 'N/A' }}</td>
                        <td>
                          <a href="{{ route('SCategoryRestore', $t_item->id) }}"class="btn btn-success">Restore</a>
                          <a href="{{ route('SPermanentDelete', $t_item->id) }}"class="btn btn-danger">Permanent Delete</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>

                  {{ $trush_category->links() }}
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



@if(session('PermanentDelete'))
Toast.fire({
  icon: 'success',
  title: "{{ session('PermanentDelete') }}"
});
@endif


@if(session('restore'))
  Toast.fire({
  icon: 'success',
  title: "{{ session('restore') }}"
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
