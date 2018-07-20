<!-- Edit product -->
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
				<label for="product_name"> Product Name :
					<input type="text" name="product_name" value="{{ $products->name }}">
				</label>
				<label for="unit_cost"> Unit Cost :
					<input type="number" name="unit_cost" value="{{ $products->unit_cost }}">
				</label>
				<label for="quantity"> Quantity :
					<input type="number" name="quantity" value="{{ $products->quantity }}">
				</label>
				<label for="channel"> Channel :
					<input type="text" name="channel" value="{{ $products->channel }}">
				</label>
				<label for="supplier"> Supplier :
					<input type="text" name="supplier" value="{{ $products->supplier }}">
				</label>
				<label for="image_path"> Image URL :
					<input type="url" name="image_path" value="{{ $products->image_path }}">
				</label>
				<div class="m-3">
					<button type="submit" class="btn btn-success pl-3 pr-3 m-2">Update</button>
					<button type="submit" class="btn btn-danger pl-3 pr-3 m-2">Cancel</button>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection