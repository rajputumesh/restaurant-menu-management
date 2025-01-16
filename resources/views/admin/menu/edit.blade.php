@extends('layouts.backend')
@section('content')

<div class="card-box mb-30 pb-4">
	<div>
		<h6 class="text-black px-3 pt-3">Edit Menu Item</h6>
	</div>
	<hr />
	<div class="container">
		<form method="post" action="{{route('menu.update', [$item->id, 'restaurant_id' => request()->get('restaurant_id')])}}" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">name</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter Menu Item Name " name="name" id="name" value="{{$item->name}}" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Price</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter menu price" name="price" id="price" value="{{$item->price}}" required />
				</div>
			</div>
			<div class="form-group row">
				<label class="font-weight-bold col-sm-12 col-md-2 col-form-label">Description</label>
				<div class="col-sm-12 col-md-10">
					<input class="form-control" type="text" placeholder="Enter menu description" name="description" id="description" value="{{$item->description}}" required />
				</div>
			</div>
			<div class="form-group row">
				<label for="img" class=" font-weight-bold col-sm-12 col-md-2 col-form-label">menu Image</label>
				<div class="col-sm-12 col-md-10">
					<input type="file" class="form-control-file form-control height-auto" id="image" name="image">
					@if($item->image)
					<img src="{{ $item->image }}" width="200px" class="mt-3" height="auto">
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