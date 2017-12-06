@extends('admin.main')

@section('title', 'Create Product')
@section('content')
	<div class="row">
		<div class="col-8">
			<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label class="col-form-label" for="product_name">Product Name</label>
			    <input type="text" name="product_name" class="form-control">
			  </div>
			  <div class="form-group">
			    <label class="col-form-label" for="category_id">Category</label>
			    <input type="text" name="category_id" class="form-control">
			  </div>

			  <div class="form-group">
			    <label class="col-form-label" for="price">Price</label>
			    <input type="text" name="price" class="form-control">
			  </div>

			  <div class="form-group">
			    <label class="col-form-label" for="sku">SKU</label>
			    <input type="text" name="sku" class="form-control">
			  </div>
			<div class="varfields-container">
			  <div class="form-group" id="variation_fields">
			  	<div class="row">
				  	<div class="col-6">
				  		<label class="col-form-label" for="product_variation">Variation</label>
				    	<input type="text" name="product_variation[0][name]" class="form-control">
				  	</div>
				  	<div class="col-4">
				  		<label class="col-form-label" for="product_value">Value</label>
				    	<input type="text" name="product_variation[0][value]" class="form-control">
				  	</div>
				  	<div class="col-2">
				  	<button type="button" class="removeVar btn btn-primary" style=" margin-top: 30px;">Remove</button>
				  	</div>
			    </div>
			  </div>
			</div>

			  <div class="form-group">
			  	<button type="button" class="add-btn btn btn-primary" style="display: block; ">Add New</button>
			  </div>

			  <div class="form-group">
			    <label class="col-form-label" for="image">Image</label></br>
			    <input type="file" name="image">
			  </div>
			  <div class="form-group">
			    <button type="submit">Create</button>
			  </div>
			</form>
		</div>
	</div>
@endsection


@section('scripts')
<script>
  $(document).ready(function(){
    var count = 0;
    var field_length = 0;

    function waitForElement(elementPath, callBack){
      window.setTimeout(function(){
        if($(elementPath).length){
          callBack(elementPath, $(elementPath));
        }else{
          waitForElement(elementPath, callBack);
        }
      },700)
    }

    $('.add-btn').click(function() {
        
        count++;
        field_length = $('.varfields-container .form-group').length;
        console.log(field_length);
        var variation_html = '<div class="form-group new" id="variation_fields"> '+
        '<div class="row"> '+
         '<div class="col-6"> '+
          '<label class="col-form-label" for="product_variation">Variation</label> '+
         '<input type="text" name="product_variation['+ count +'][name]" class="form-control"> '+
         ' </div> '+
         '<div class="col-4"> '+
          '<label class="col-form-label" for="product_value">Value</label> '+
          '<input type="text" name="product_variation['+ count +'][value]" class="form-control">'+
         ' </div> '+
         ' <div class="col-2"> '+
         '   <button type="button" class="removeVar btn btn-primary" style=" margin-top: 30px;">Remove</button> '+
         ' </div>'+
        '</div> '+
     ' </div>';
        $('.varfields-container').append(variation_html);

        waitForElement(".varfields-container .form-group",function(){
          console.log('test');
          $('.removeVar').click(function() {
            $(this).parents('.form-group').remove();
            // console.log('is clicked');
          });
        });
    });

    
    
    
      $('.removeVar').click(function() {
        $(this).parents('.form-group').remove()
      });
      
  });
</script>
@endsection