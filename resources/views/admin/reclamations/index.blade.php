@extends('admin.reclamations.master')

@section('content')

@if($message = Session::get('success'))

<div class="alert alert-success">
	{{ $message }}
</div>

@endif

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>reclamations Data</b></div>
			<div class="col col-md-6">
				<a href="{{ route('reclamations.create') }}" class="btn btn-success btn-sm float-end">Add</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<table class="table table-bordered">
			<tr>
				<th>Image</th>
				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Action</th>
			</tr>
			@if(count($data) > 0)

				@foreach($data as $row)

					<tr>
						<td><img src="{{ asset('images/' . $row->user_image) }}" width="75" /></td>
						<td>{{ $row->fullname }}</td>
						<td>{{ $row->user_email }}</td>
						<td>{{ $row->user_gender }}</td>
						<td>
							<form method="post" action="{{ route('reclamations.destroy', $row->id) }}">
								@csrf
								@method('DELETE')
								<a href="{{ route('reclamations.show', $row->id) }}" class="btn btn-primary btn-sm">View</a>
								<a href="{{ route('reclamations.edit', $row->id) }}" class="btn btn-warning btn-sm">Edit</a>
								<input type="submit" class="btn btn-danger btn-sm" value="Delete" />
							</form>
							
						</td>
					</tr>

				@endforeach

			@else
				<tr>
					<td colspan="5" class="text-center">No Data Found</td>
				</tr>
			@endif
		</table>
		{!! $data->links() !!}
	</div>
</div>

@endsection