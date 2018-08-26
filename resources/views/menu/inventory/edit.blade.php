<!-- Edit Product -->
@extends('layouts.app')
@section('content')

<div class="container">
	<form method="post" action="{{ action('Menu\InventoryController@update', $id) }}" accept-charset="utf-8">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-4 ml-5 mt-5">
				<img src="{{ $products->image_path }}" alt="product-image" width="250px" height="250px">
			</div>
			<div class="col-md-5 col-lg-4 m-5 product-edit">
				<input name="_method" type="hidden" value="PATCH">
				<label for="product_name"> Product Name :</label>
					<input type="text" name="product_name" value="{{ $products->name }}"><br>
				<label for="unit_cost"> Unit Cost :</label>
					<input type="number" name="unit_cost" value="{{ $products->unit_cost }}"><br>
				<label for="quantity"> Quantity :</label>
					<input type="number" name="quantity" value="{{ $products->quantity }}"><br>
				<label for="channel"> Channel :</label>
					<input type="text" name="channel" value="{{ $products->channel }}"><br>
				<label for="supplier"> Supplier :</label>
					<input type="text" name="supplier" value="{{ $products->supplier }}"><br>
				<label for="image_path"> Image URL :</label>
					<input type="url" name="image_path" value="{{ $products->image_path }}"><br>
				<div class="m-3">
					<button type="submit" class="btn btn-success pl-3 pr-3 m-2">Update</button>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection