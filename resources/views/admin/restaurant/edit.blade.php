@extends('layouts.backend')
@section('content')

<div class="card-box pb-5">
	<div>
		<h6 class="text-black px-3 pt-3">Edit Restaurant</h6>
	</div>
	<hr />
	<div class="container">
		@if ($errors->any())
		<div class="alert alert-danger py-5">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<form method="post" action="{{route('restaurant.update', $item->id)}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Name</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter restaurant name" value="{{$item->name}}" name="name" id="name" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Mobile</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter mobile Number" value="{{$item->mobile}}" name="mobile" id="mobile" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Address</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter address" value="{{$item->address}}" name="address" id="address" required />
				</div>
			</div>
			<div class="form-group row">
				<label for="img" class=" font-weight-bold col-sm-12 col-md-2 col-form-label">Logo</label>
				<div class="col-sm-12 col-md-10">
					<input type="file" class="form-control-file form-control height-auto" id="image" name="image">
					@if($item->image)
					<img src="{{ $item->image }}" width="100px" class="mt-3" height="auto">
					@endif
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