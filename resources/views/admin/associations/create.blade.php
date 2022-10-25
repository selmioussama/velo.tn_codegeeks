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
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Association</h4>
                    <p class="card-description"> Basic Association Informations </p>
                    <form class="forms-sample" method="post" action="{{ route('associations.store') }}" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="association_name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email" name="association_email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Number of employees</label>
                        <input type="number" class="form-control" id="exampleInputPassword4" placeholder="Password" name="association_number_of_employees">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Type</label>
                        <select class="form-control" id="exampleSelectGender" name="association_type">
                          <option value="For Profit">For Profit</option>
                          <option value="Non Profit">Non Profit</option>
                          <option value="Sport">Sport</option>
                          <option value="Manifacturer">Manifacturer</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Logo</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="file" class="form-control file-upload-info" name="association_logo" placeholder="Upload Image">
                        </div>
                      </div>
                      <button  type="submit" class="btn btn-outline-success" > Submit </button>
                    </form>
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
