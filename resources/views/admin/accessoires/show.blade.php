
@extends('admin.accessoires.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Accessoire Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('accessoire.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Accessoire Name</b></label>
			<div class="col-sm-10">
				{{ $accessoire->accessoire_name }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>accessoire Price</b></label>
			<div class="col-sm-10">
				{{ $accessoire->accessoire_price }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b>accessoire Image</b></label>
			<div class="col-sm-10">
				<img src="{{ asset('images/' .  $accessoire->accessoire_image) }}" width="200" class="img-thumbnail" />
			</div>
		</div>
	</div>
</div>

@endsection('content')