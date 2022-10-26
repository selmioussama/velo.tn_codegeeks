@extends('admin.repairs.master')

@section('content')

<div class="card">
	<div class="card-header">Edit reparation</div>
	<div class="card-body">
		<form method="post" action="{{ route('repairs.update', $repair->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Full Name</label>
				<div class="col-sm-10">
					<input type="text" name="fullname" class="form-control" value="{{ $repair->fullname }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Email</label>
				<div class="col-sm-10">
					<input type="text" name="user_email" class="form-control" value="{{ $repair->user_email }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> Date</label>
				<div class="col-sm-10">
					<input type="text" name="repair_date" class="form-control" value="{{ $repair->repair_date }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> Cost</label>
				<div class="col-sm-10">
					<input type="text" name="cost" class="form-control" value="{{ $repair->cost}}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $repair->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
{{-- <script>
document.getElementsByName('user_gender')[0].value = "{{ $reclamation->user_gender }}";
</script> --}}

@endsection('content')

