@extends('admin.reclamations.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Reclamation Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('reclamations.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Full Name</b></label>
			<div class="col-sm-10">
				{{ $reclamation->fullname }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b> Email</b></label>
			<div class="col-sm-10">
				{{ $reclamation->user_email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Gender</b></label>
			<div class="col-sm-10">
				{{ $reclamation->user_gender }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $reclamation->user_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')