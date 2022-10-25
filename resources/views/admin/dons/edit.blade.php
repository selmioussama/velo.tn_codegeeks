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
                    <h4 class="card-title">Update Donation</h4>
                    <p class="card-description"> Donation's Info </p>
                    <form class="forms-sample" method="post" action="{{ route('dons.update', $don->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                      <div class="form-group">
                        <label for="exampleInputName1">Amount</label>
                        <input type="number" class="form-control" id="exampleInputName1" placeholder="Amount" name="don_amount" value="{{ $don->don_amount }}">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Destination</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" name="don_destination" value="{{ $don->don_destination }}">
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
                        <label for="exampleInputPassword4">description</label>
                        <input type="text" class="form-control" id="exampleInputPassword4" placeholder="Description" name="don_description" value="{{ $don->don_description }}">
                      </div>
                      <input type="hidden" name="hidden_id" value="{{ $don->id }}" />
				<input type="submit" class="btn btn-outline-primary" value="Edit" />
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
<script>
document.getElementsByName('don_type')[0].value = "{{ $don->don_type }}";
</script>
</html>