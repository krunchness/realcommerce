@extends('admin.main')

@section('title', 'Create Product')
@section('content')
	<div class="row">
		<div class="col-8">
			<form method="POST" action="{{ route('category.store') }}">
				{{ csrf_field() }}
			  <div class="form-group">
			    <label class="col-form-label" for="category_name">Category Name</label>
			    <input type="text" name="category_name" class="form-control" placeholder="Example input">
			  </div>
			  
			  <div class="form-group">
			    <button type="submit">Create</button>
			  </div>
			</form>
		</div>
	</div>
@endsection