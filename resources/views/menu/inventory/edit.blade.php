<!-- Edit Product -->
@extends('layouts.app')
@section('content')

<div class="container">
	<form method="post" action="{{ action('Menu\InventoryController@update', $id) }}" accept-charset="utf-8" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-4 ml-5 mt-5">
				<img src="{{ $products->image_path }}" alt="product-image" width="250px" height="250px">
				<input class="form-control-file mt-4" type="file" name="image_path" onchange="previewImage()">
			</div>
			<div class="col-md-5 col-lg-4 m-5 product-edit">
				<input name="_method" type="hidden" value="PATCH">
				<label for="product_name"> Product Name :</label>
					<input class="form-control" type="text" name="product_name" value="{{ $products->product_name }}">
				<label for="unit_cost"> Unit Cost :</label>
					<input class="form-control" type="number" name="unit_cost" value="{{ $products->unit_cost }}">
				<label for="quantity"> Quantity :</label>
					<input class="form-control" type="number" name="quantity" value="{{ $products->quantity }}">
				<label for="channel"> Channel :</label>
					<input class="form-control" type="text" name="channel" value="{{ $products->channel }}">
				<label for="supplier"> Supplier :</label>
					<input class="form-control" type="text" name="supplier" value="{{ $products->supplier }}">
				<div class="m-3">
					<button type="submit" class="btn btn-success pl-3 pr-3 m-2">Update</button>
				</div>
			</div>
		</div>
	</form>
</div>

<script src="{{ asset('js/script.js') }}"></script>

@endsection
