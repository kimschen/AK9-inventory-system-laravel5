<!-- Create Product -->
@extends('layouts.app')
@section('content')

<div class="container">
	<form method="post" action="/inventory" accept-charset="utf-8">
		{{ csrf_field() }}
		<div class="row">
			<div class="col-lg-4 ml-5 mt-5">

				<!-- Upload Image File -->
				<label for="image_path"></label>
				<img src="https://nj.curaleaf.com/wp-content/uploads/sites/39/2018/05/temp-inventory-landing.jpg" height="200px" alt="Image Preview">
				<input class="form-control-file" type="file" name="image_path" onchange="previewImage()"><br>

				<!-- Upload Image URL -->
				{{-- <label for="image_url">Image URL : </label>
				<input class="form-control" type="url" name="image_url" placeholder="https://imageurl.com"> --}}

			</div>
			<div class="col-md-5 col-lg-4 m-5">
				<label for="product_name">Product Name :</label>
					<input class="form-control" type="text" name="product_name">
				<label for="unit_cost">Unit Cost :</label>
					<input class="form-control" type="number" name="unit_cost" maxlength="7">
				<label for="quantity">Quantity :</label>
					<input class="form-control" type="number" name="quantity" maxlength="3">
				<label for="channel">Channel :</label>
					<input class="form-control" type="text" name="channel">
				<label for="supplier">Supplier :</label>
					<input class="form-control" type="text" name="supplier">
				<div class="m-5">
					<button type="submit" class="btn btn-success pl-5 pr-5">Add</button>
				</div>
			</div>
		</div>
	</form>
</div>

<script src="{{ asset('js/script.js') }}"></script>

@endsection
