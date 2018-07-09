@extends('layouts.app')

@section('content')

<div class="container">
	<form method="post" action="/inventory" accept-charset="utf-8">
		{{ csrf_field() }}
		<label for="product-name">Product Name :
			<input type="text" name="name">
		</label><br>
		<label for="unit-cost">Unit Cost :
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
		<div class="container float-right">
			<button type="submit" class="btn btn-success m-2">Confirm</button>
			<button type="submit" class="btn btn-danger m-2">Cancel</button>
		</div>
	</form>
</div>

@endsection