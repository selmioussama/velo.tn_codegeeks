@extends('admin.reclamations.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Reclamation</div>
	<div class="card-body">
		<form method="post" action="{{ route('reclamations.update', $reclamation->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Full Name</label>
				<div class="col-sm-10">
					<input type="text" name="fullname" class="form-control" value="{{ $reclamation->fullname }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form"> Email</label>
				<div class="col-sm-10">
					<input type="text" name="user_email" class="form-control" value="{{ $reclamation->user_email }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> Gender</label>
				<div class="col-sm-10">
					<select name="user_gender" class="form-control">
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form"> Image</label>
				<div class="col-sm-10">
					<input type="file" name="user_image" />
					<br />
					<img src="{{ asset('images/' . $reclamation->user_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_user_image" value="{{ $reclamation->user_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $reclamation->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>
document.getElementsByName('user_gender')[0].value = "{{ $reclamation->user_gender }}";
</script>

@endsection('content')

