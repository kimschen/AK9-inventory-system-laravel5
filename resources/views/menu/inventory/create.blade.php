@extends('layouts.app')

@section('content')

<div class="container">
	<form action="inventory-submit" method="get" accept-charset="utf-8">
		<label for="product-name">Product Name :
			<input type="text" name="product-name">
		</label><br>
		<label for="unit-cost">Unit Cost :
			<input type="text" name="unit-cost" value="">
		</label><br>
		<label for="stock">Stock :
			<input type="text" name="stock" value="">
		</label><br>
		<label for="channel">Channel :
			<input type="text" name="channel" value="">
		</label><br>
		<label for="supplier">Supplier (Optional) :
			<input type="text" name="supplier" value="">
		</label><br>
		<img src="" alt="product-image" class="img-thumbnail">
		<button class="btn btn-primary" onclick="">Upload</button>
	</form>
</div>

<div class="container">
	<button class="btn btn-danger float-right m-1" onclick="">Cancel</button>
	<button class="btn btn-success float-right m-1" onclick="">Confirm</button>
</div>
@endsection