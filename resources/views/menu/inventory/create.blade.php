@extends('layouts.app')
@section('content')

<div class="container">
	<form method="post" action="/inventory" accept-charset="utf-8">
		{{ csrf_field() }}
		<label for="product_name">Product Name :
			<input type="text" name="product_name">
		</label><br>
		<label for="unit_cost">Unit Cost :
			<input type="number" name="unit_cost" value="">
		</label><br>
		<label for="quantity">Quantity :
			<input type="number" name="quantity" value="">
		</label><br>
		<label for="channel">Channel :
			<input type="text" name="channel" value="">
		</label><br>
		<label for="supplier">Supplier :
			<input type="text" name="supplier" value="">
		</label><br>

		<label for="image_path">Image URL :
			<input type="url" name="image_path">
		<div class="container m-4">
			<button type="submit" class="btn btn-success pl-5 pr-5">Add</button>
		</div>
	</form>
</div>

@endsection