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
		<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-8"><b>Don Details</b></div>
			<div class="col col-md-8">
				<a href="{{ route('dons.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Don Amount</b></label>
			<div class="col-sm-10">
				{{ $don->don_amount }}
			</div>
		</div>
        <div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Don Destination</b></label>
			<div class="col-sm-10">
				{{ $don->don_destination }}
			</div>
		</div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Don Providers</b></label>
               <ul>
                 @foreach($don->associations as $p)
                    <li class="col-sm-10">
				{{ $p->association_name }}
</li>
                @endforeach
               </ul>
        </div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Don Description</b></label>
			<div class="col-sm-10">
				{{ $don->don_description }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>Don Type</b></label>
			<div class="col-sm-10">
				{{ $don->don_type }}
			</div>
		</div>
		
	</div>
</div>

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