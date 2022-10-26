@extends('admin.accessoires.master')

@section('content')

<div class="card">
	<div class="card-header">Edit Accesoire</div>
	<div class="card-body">
		<form method="post" action="{{ route('accessoire.update', $accessoire->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Accesoire Name</label>
				<div class="col-sm-10">
					<input type="text" name="accessoire_name" class="form-control" value="{{ $accessoire->accessoire_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">Accesoire price</label>
				<div class="col-sm-10">
					<input type="text" name="accessoire_price" class="form-control" value="{{ $accessoire->accessoire_price }}" />
				</div>
			</div>
			<div class="row mb-4">
				<label class="col-sm-2 col-label-form">Accesoire Image</label>
				<div class="col-sm-10">
					<input type="file" name="accessoire_image" />
					<br />
					<img src="{{ asset('images/' . $accessoire->accessoire_image) }}" width="100" class="img-thumbnail" />
					<input type="hidden" name="hidden_accessoire_image" value="{{ $accessoire->accessoire_image }}" />
				</div>
			</div>
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $accessoire->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>
<script>
document.getElementsByName('accessoire_gender')[0].value = "{{ $accessoire->accessoire_gender }}";
</script>

@endsection('content')
