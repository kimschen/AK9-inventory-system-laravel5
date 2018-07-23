<!-- Create Product -->
@extends('layouts.app')
@section('content')

<div class="container">
	<form method="post" action="/inventory" accept-charset="utf-8">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-4 ml-5 mt-5">
				<label for="image_path"></label>
					<img src="https://nj.curaleaf.com/wp-content/uploads/sites/39/2018/05/temp-inventory-landing.jpg" height="200px" alt="Image Preview">
					<input type="file" name="image_path" onchange="previewImage()"><br>
			</div>
			<div class="col-md-5 col-lg-4 m-5">
				<label for="product_name">Product Name :</label>
					<input type="text" name="product_name"><br>
				<label for="unit_cost">Unit Cost :</label>
					<input type="number" name="unit_cost"><br>
				<label for="quantity">Quantity :</label>
					<input type="number" name="quantity"><br>
				<label for="channel">Channel :</label>
					<input type="text" name="channel"><br>
				<label for="supplier">Supplier :</label>
					<input type="text" name="supplier"><br>
				<div class="m-5">
					<button type="submit" class="btn btn-success pl-5 pr-5">Add</button>
				</div>
			</div>
		</div>
	</form>
</div>

<script src="{{ asset('js/script.js') }}"></script>

@endsection