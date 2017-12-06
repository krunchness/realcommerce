<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
	<script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	
</head>
<body>

	<div id="wrapper" style="padding-top: 2em;"> 
		<div class="row">
			<div class="col-2">
				<div id="sidebar-wrapper">
		            <ul class="sidebar-nav">
		                <li>
		                    <a href="{{ route('admin.index') }}">Dashboard</a>
		                </li>
		                <li>
		                    <a href="{{ route('product.index') }}">Product</a>
		                </li>
		                <li>
		                    <a href="{{ route('category.index') }}">Category</a>
		                </li>
		            </ul>
	            </div>
            </div>

            <div class="col-10">
            	<h2>@yield('title')</h2>
            	
            	<div class="content">
            		@yield('content')
            	</div>
            </div>
        </div>
	</div>

	
@yield('scripts')
</body> 
</html>