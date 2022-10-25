<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Stellar Admin</title>
    <!-- plugins:css -->
    @include('admin.css')
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
        <div class="col-lg-10 flex-column mt-2">
          @if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>
@endif
        <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Donation Table</h4>
                    <p class="card-description"> Add Donation <a href="{{ route('dons.create') }}" class="btn btn-success btn-md">Click Here</a>
                    </p>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th> ID </th>
                          <th> Destination </th>
                          <th> Amount </th>
                          <th> Type </th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        @if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td>{{ $row->id }}</td>
            <td>{{ $row->don_destination }}</td>
						<td>{{ $row->don_amount }}</td>
						<td>{{ $row->don_type }}</td>
						<td>
							<form method="post" action="{{ route('dons.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('dons.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('dons.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a> 
								<input type="submit" class="btn btn-outline-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="6" class="text-center">No Data Found</td>
				</tr>
			@endif
                      </tbody>
                    </table>
                    <div class="ml-5 mt-3 float-left col-10">
          {!! $data->links() !!}
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