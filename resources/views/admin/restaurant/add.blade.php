@extends('layouts.backend')
@section('content')
<div class="card-box mb-30">
	<div>
		<h6 class="text-black px-3 pt-3">Create New Restaurant</h6>
	</div>
	<hr />
	<div class="container px-lg-5 pb-4">
		@if ($errors->any())
		<div class="alert alert-danger py-5">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{route('restaurant.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Name</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter restaurant name" name="name" id="name" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Mobile</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter mobile number" name="mobile" id="mobile" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Address</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter address" name="address" id="address" required />
				</div>
			</div>
			<div class="form-group row">
				<label for="img" class=" font-weight-bold col-sm-12 col-md-2 col-form-label">Logo</label>
				<div class="col-sm-12 col-md-10">
					<input type="file" class="form-control-file form-control height-auto" id="image" name="image" required>
				</div>
			</div>
			<div class="text-right">
				<input type="submit" class="btn btn-info px-5" value="Submit">
				<input type="reset" class="btn btn-warning px-5 ml-1" value="Reset">
			</div>
		</form>
	</div>
</div>
@endsection