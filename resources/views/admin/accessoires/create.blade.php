
@extends('admin.accessoires.master')

@section('content')

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
	<div class="card-header">Add Accessoire</div>
	<div class="card-body">
		<form method="post" action="{{ route('accessoire.store') }}" enctype="multipart/form-data">
			@csrf
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Accessoire Name</label>
				<div class="col-sm-10">
					<input type="text" name="accessoire_name" class="form-control" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Accessoire Price</label>
				<div class="col-sm-10">
					<input type="text" name="accessoire_price" class="form-control" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Accessoire Image</label>
				<div class="col-sm-10">
					<input type="file" name="accessoire_image" />
				</div>
			</div>
			<div class="text-center">
				<input type="submit" class="btn btn-primary" value="Add" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')