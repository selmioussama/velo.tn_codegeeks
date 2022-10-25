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
    <link rel="stylesheet" href="{{('public/admin/vendors/select2/select2.min.css')}}">
    <link rel="stylesheet" href="{{('public/admin/vendors/select2-bootstrap-theme/select2-bootstrap.min.css')}}">
    
	
	
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
                    <h4 class="card-title">Add Don</h4>
                    <p class="card-description"> Don Informations </p>
                    <form class="forms-sample" method="post" action="{{ route('dons.store') }}" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputName1">Amount</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Amount" name="don_amount">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Destination</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Destination" name="don_destination">
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Type</label>
                        <select class="form-control" id="exampleSelectGender" name="don_type">
                          <option value="One time">One time</option>
                          <option value="recurring">recurring</option>
                        </select>
                      </div>
                      <div class="form-group">
                      <label>Associations</label>
                      <select class="js-example-basic-multiple" multiple="multiple" name="associations[]" style="width:100%">
                      @foreach($allAssociations as $ass)
                        <option value="{{$ass->id}}">{{$ass->association_name}}</option>
                        @endforeach
                      </select>
                    </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Description" name="don_description">
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
<script src="../../../../public/admin/js//js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../../../public/admin/vendors/select2/select2.min.js"></script>
    <script src="../../../../public/admin/vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../../../public/admin/js/js/off-canvas.js"></script>
    <script src="../../../../public/admin/js//misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="../../../../public/admin/js/typeahead.js"></script>
    <script src="../../../../public/admin/js/js/select2.js"></script>
    <!-- End custom js for this page -->
<!-- End custom js for this page -->

</body>
</html>
