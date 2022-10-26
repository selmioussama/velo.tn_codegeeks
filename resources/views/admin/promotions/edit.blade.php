
@extends('admin.promotions.master')

@section('content')

<div class="card">
	<div class="card-header">Edit promotion</div>
	<div class="card-body">
		<form method="post" action="{{ route('promotion.update', $promotion->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">promotion Name</label>
				<div class="col-sm-10">
					<input type="text" name="promotion_name" class="form-control" value="{{ $promotion->promotion_name }}" />
				</div>
			</div>
			<div class="row mb-3">
				<label class="col-sm-2 col-label-form">promotion value</label>
				<div class="col-sm-10">
					<input type="text" name="promotion_value" class="form-control" value="{{ $promotion->promotion_value }}" />
				</div>
			</div>
	
			<div class="text-center">
				<input type="hidden" name="hidden_id" value="{{ $promotion->id }}" />
				<input type="submit" class="btn btn-primary" value="Edit" />
			</div>	
		</form>
	</div>
</div>

@endsection('content')