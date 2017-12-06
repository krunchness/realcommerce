@extends('admin.main')

@section('title', 'Products')
@section('content')
	<a href="{{ route('product.create') }}">
		<button>Create Product</button>
	</a>

@endsection