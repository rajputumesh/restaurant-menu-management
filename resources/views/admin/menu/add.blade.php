@extends('layouts.backend')
@section('content')
<div class="card-box mb-30 pb-4">
	<div class="">
		<h6 class="px-3 pt-3">Create New Foot Item</h6>
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
		<form method="post" action="{{route('menu.store', ['restaurant_id' => request()->get('restaurant_id')])}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">name</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter Menu Item Name " name="name" id="name" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Price</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter menu price" name="price" id="price" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Description</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter menu description" name="description" id="description" required />
				</div>
			</div>
			<div class="form-group row">
				<label for="img" class=" font-weight-bold col-sm-12 col-md-2 col-form-label">Image</label>
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