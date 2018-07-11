<!-- Edit product pop-out modal -->
@extends('layouts.app')
@section('content')

<div class="container">
	<form method="post" action="{{ action('Menu\InventoryController@update', $id) }}" accept-charset="utf-8">
		{{ csrf_field() }}
		<div class="container card"><img class="card-img-top" src="{{ $products->image_path}}" alt="product-image" height="400px"></div>
		<div class="modal-body">
			<input name="_method" type="hidden" value="PATCH">
			<label for="product_name"> Product Name :
				<input type="text" name="product_name" value="{{ $products->name }}">
			</label><br>
			<label for="unit_cost"> Unit Cost :
				<input type="number" name="unit_cost" value="{{ $products->unit_cost }}">
			</label><br>
			<label for="quantity"> Quantity :
				<input type="number" name="quantity" value="{{ $products->quantity }}">
			</label><br>
			<label for="channel"> Channel :
				<input type="text" name="channel" value="{{ $products->channel }}">
			</label><br>
			<label for="supplier"> Supplier :
				<input type="text" name="supplier" value="{{ $products->supplier }}">
			</label><br>
			<label for="image_path"> Image URL :
				<input type="url" name="image_path" value="{{ $products->image_path }}">
			</label><br>
		</div>
		<div class="container m-4">
			<button type="submit" class="btn btn-success pl-5 pr-5 m-2"> Update</button>
			<form method="post" action="{{ action('Menu\InventoryController@destroy', $id) }}">
				<input name="_method" type="hidden" value="DELETE">
				<button type="submit" class="btn btn-danger pl-5 pr-5 m-2">Delete</button>
			</form>
		</div>
	</form>
</div>

@endsection