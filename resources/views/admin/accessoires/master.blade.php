<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
	<link href="{{ asset('admin/vendors/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendors/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('admin/images/favicon.png') }}" rel="stylesheet">
	<link href="{{ asset('admin/vendors/chartist/chartist.min.css') }}" rel="stylesheet">
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
@include('admin.header')
    <!-- partial -->
    
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        
        <!-- partial -->
        
		<div class="col-10 flex-column mt-2">
                @if($errors->any())

<div class="alert alert-danger">
	<ul>
	@foreach($errors->all() as $error)

		<li>{{ $error }}</li>

	@endforeach
	</ul>
</div>

@endif
<div class="container mt-5">
        
        <h1 class="text-primary mt-3 mb-4 text-center"><b>Accessoire</b></h1>
        
        @yield('content')
        
    </div>
    
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
@include('admin.javascript')

<!-- End custom js for this page -->
</body>
</html>

