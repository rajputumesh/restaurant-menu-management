@extends('layouts.backend')

@section('content')
<div class="card-box mb-30">
	<div class="d-flex justify-content-between py-1 px-3 align-items-center">
		<h6 class="text-black">List Food Item</h6>
		<a class="btn btn-warning btn-sm" href="{{route('menu.create', ['restaurant_id' => request()->get('restaurant_id')])}}">Add Menu</a>
	</div>
	<div class="pb-20">
		<table class="data-table table stripe hover">
			<thead>
				<tr>
					<th>Sr.No</th>
					<th>Name</th>
					<th>Price</th>
					<th>Image</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($items as $kay => $item)
				<tr>
					<td class="table-plus">{{$kay+1}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->price}}</td>
					<td>
						@if($item->image)
						<img src="{{ $item->image }}" width="100px" height="100px">
						@else
						N/A
						@endif
					</td>
					<td class="d-flex">
						<a title="Edit menu" class="btn btn-warning btn-sm mx-1" href="{{route('menu.edit', [$item->id, 'restaurant_id' =>request()->get('restaurant_id')])}}"><i class="dw dw-edit2"></i></a>
						<a title="Delete menu" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this menu?'))
								{
									document.getElementById('delete-form-{{$item->id}}').submit();
								}
								"><i class="dw dw-delete-3"></i></a>
						<form method="post" id="delete-form-{{$item->id}}" action="{{route('menu.destroy',[$item->id, 'restaurant_id' =>request()->get('restaurant_id')])}}">
							@csrf
							@method('DELETE')
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection