@extends('admin.main')

@section('title', 'Products')
@section('content')

	<a href="{{ route('category.create') }}">
		<button>Create Category</button>
	</a>

@endsection