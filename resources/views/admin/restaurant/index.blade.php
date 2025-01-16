@extends('layouts.backend')

@section('content')
<div class="card-box mb-30">
	<div class="pull-center">
		<h6 class="text-black p-3">List Restaurant</h6>
	</div>
	<div class="pb-20">
		<table class="data-table table stripe hover">
			<thead>
				<tr>
					<th>Sr.No</th>
					<th>Name</th>
					<th>Mobile</th>
					<th>Address</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($items as $kay => $item)
				<tr>
					<td class="table-plus">{{$kay+1}}</td>
					<td>{{$item->name}}</td>
					<td>{{$item->mobile}}</td>
					<td>{{$item->address}}</td>
					<td class="d-flex">
						<a title="Add Menu" class="btn btn-info btn-sm" href="{{route('menu.index', ['restaurant_id' => $item->id])}}">+</a>
						<a title="Edit restaurant" class="btn btn-warning btn-sm mx-1" href="{{route('restaurant.edit', $item->id)}}"><i class="dw dw-edit2"></i></a>
						<a title="Delete restaurant" class="btn btn-danger btn-sm" onclick="if(confirm('Are you sure you want to delete this restaurant?'))
								{
									document.getElementById('delete-form-{{$item->id}}').submit();
								}
								"><i class="dw dw-delete-3"></i></a>
						<form method="post" id="delete-form-{{$item->id}}" action="{{route('restaurant.destroy',$item->id)}}">
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