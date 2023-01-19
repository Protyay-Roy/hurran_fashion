@extends('backend.master')
@section('products')
    active
@endsection

@section('content')

<div class="sl-pagebody">
  <div class="sl-page-title">
    <h5>Add Products</h5>
  </div><!-- sl-page-title -->

  @if($stock->quantity < 6) style="background: #f7a11bf0;"  @endif



  <div class="row row-sm mg-t-20"> 
    <div class="col-xl-10 m-auto">
      <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
        <form action="{{ route('ProductStore') }}" method="POST" enctype="multipart/form-data">
          @csrf

          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Product Title: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="title" class="form-control" placeholder="Enter Product Title">
            </div>
          </div><!-- row -->

          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Product Price: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" name="price" class="form-control" placeholder="Enter Product Price">
            </div>
          </div>
          <!-- row -->

          <div class="row mg-t-20">
            <label for="brand_id" class="col-sm-4 form-control-label">Brand: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select name="brand_id" id="brand_id" class="form-control">
                @foreach ($brands as $brand)
                <option value="{{ $brand->id }}">{{ $brand->brand_name }}</option>
                @endforeach

              </select>
            </div>
          </div>




          <div class="row mg-t-20">
            <label for="store_id" class="col-sm-4 form-control-label">Store: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select name="store_id" id="store_id" class="form-control">
                @foreach ($store as $st)
                <option value="{{ $st->id }}">{{ $st->title }}</option>
                @endforeach

              </select>
            </div>
          </div>

          <!-- row -->
          <div id="items">

          <div class="row mg-t-20">
            <label for="color_id" class="col-sm-2 form-control-label">Color: <span class="tx-danger">*</span></label>
            <div class="col-sm-3 mg-t-10 mg-sm-t-0">
              <select name="color_id[]" id="color_id" class="form-control">
                <option value>Select One</option>
                @foreach ($colors as $color)
                <option value="{{ $color->id }}">{{ $color->color_name }}</option>
                @endforeach

              </select>
            </div>



           <!-- row -->


            <label for="size_id" class="col-sm-1 form-control-label">Size: <span class="tx-danger">*</span></label>
            <div class="col-sm-3 mg-t-10 mg-sm-t-0">
              <select name="size_id[]" id="size_id" class="form-control">
                <option value>Select One</option>
                @foreach ($sizes as $size)
                <option value="{{ $size->id }}">{{ $size->size_name }}</option>
                @endforeach

              </select>
            </div>

              <label for="quantity" class="col-sm-1 form-control-label">Quantity: <span class="tx-danger">*</span></label>
              <div class="col-sm-2 mg-t-10 mg-sm-t-0">
                <input type="text" name="quantity[]" class="form-control" placeholder="50">
              </div>

            </div>

            <a href="javascript:void(0);" class="add_button btn btn-primary" title="Add field"><i class="fa fa-plus"></i>Add</a>


            <div class="field_wrapper">
    <div>
        
    </div>
</div>

          </div>



          <div class="row mg-t-20">
            <label for="category_id" class="col-sm-4 form-control-label">Category: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select name="category_id" id="category_id" class="form-control">
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                @endforeach

              </select>
            </div>
          </div>

          {{-- sub category --}}

          <div class="row mg-t-20">
            <label for="subcategory_id" class="col-sm-4 form-control-label">Sub Category: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <select name="subcategory_id" id="subcategory_id" class="form-control">
                @foreach ($scat as $sc)
                <option value="{{ $sc->id }}">{{ $sc->subcategory_name }}</option>
                @endforeach

              </select>
            </div>
          </div>


           {{-- Summary --}}

           <div class="row mg-t-20">
            <label for="summary" class="col-sm-4 form-control-label">Summary: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <textarea name="summary" id="summary" class="col-sm-12 mg-t-10 mg-sm-t-0"></textarea>
            </div>
          </div>

           {{-- Description --}}

           <div class="row mg-t-20">
            <label for="description" class="col-sm-4 form-control-label">Description: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <textarea name="description" id="description" class="col-sm-12 mg-t-10 mg-sm-t-0"></textarea>
            </div>
          </div>


          <div class="row">
            <label class="col-sm-4 form-control-label">Product Thumbnail: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="file" name="thumbnail" class="form-control" placeholder="Enter Product Thumbnail">
            </div>
          </div>
          <!-- row -->

          <div class="row">
            <label class="col-sm-4 form-control-label">Product Images: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="file" name="images[]" multiple class="form-control" placeholder="Enter Product Thumbnail">
            </div>
          </div>
          <!-- row -->


          <div class="form-layout-footer mg-t-30 text-center">
            <button class="btn btn-info mg-r-5">Save</button>
            <!-- <div class="remove">
                <button type="button" name="button">jhgjg</button>
            </div> -->
          </div><!-- form-layout-footer -->
        </form>
      </div><!-- card -->
    </div><!-- col-6 -->
  </div><!-- row -->


</div><!-- sl-pagebody -->

@endsection


{{-- Links --}}

 <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div class="row mg-t-20"><label for="color_id" class="col-sm-2 form-control-label">Color: <span class="tx-danger">*</span></label><div class="col-sm-3 mg-t-10 mg-sm-t-0"><select name="color_id[]" id="color_id" class="form-control">@foreach ($colors as $color)<option value="{{ $color->id }}">{{ $color->color_name }}</option>@endforeach</select></div><label for="size_id" class="col-sm-1 form-control-label">Size: <span class="tx-danger">*</span></label><div class="col-sm-3 mg-t-10 mg-sm-t-0"><select name="size_id[]" id="size_id" class="form-control">@foreach ($sizes as $size)<option value="{{ $size->id }}">{{ $size->size_name }}</option>@endforeach</select></div><label for="category_id" class="col-sm-1 form-control-label">Quantity: <span class="tx-danger">*</span></label><div class="col-sm-2 mg-t-10 mg-sm-t-0"><input type="text" name="quantity[]" class="form-control" placeholder="50"></div><a href="javascript:void(0);" class="remove_button btn btn-danger">Remove</a></div>'; //New input field html
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
