@extends('admin.repairs.master')

@section('content')

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col col-md-6"><b>Reparation Details</b></div>
			<div class="col col-md-6">
				<a href="{{ route('repairs.index') }}" class="btn btn-primary btn-sm float-end">View All</a>
			</div>
		</div>
	</div>
	<div class="card-body">
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b>Full Name</b></label>
			<div class="col-sm-10">
				{{ $repair->fullname }}
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-label-form"><b> Email</b></label>
			<div class="col-sm-10">
				{{ $repair->user_email }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Date</b></label>
			<div class="col-sm-10">
				{{ $repair->repair_date }}
			</div>
		</div>
		<div class="row mb-4">
			<label class="col-sm-2 col-label-form"><b> Cost</b></label>
			<div class="col-sm-10">
				{{ $repair->cost }}
			</div>
		</div>
	</div>
</div>

@endsection('content')