<!-- Product Index -->
@extends('layouts.app')
@section('content')

<div class="container">
	<button class="btn btn-primary float-right mt-3" onclick="window.location='{{ route('create') }}';">Add (+)</button>
</div>

<div class="container row">
	@foreach($products as $product)
	<div class="col-lg-2 mt-5">
		<div class="card">
		 	<div class="product-image">
		 		<img class="card-img-top" src="{{ $product['image_path'] }}" alt="product-image" width="150px" height="150px">
		 	</div>
			<div class="container row align-self-center btn-product">
				<button type="submit"
						class="btn pl-2 pr-2 m-1"
						onclick="window.location='{{ action('Menu\InventoryController@edit', $product['id']) }}';">Edit
				</button>
				<form method="post" action="{{ action('Menu\InventoryController@destroy', $product['id']) }}">
					{{ csrf_field() }}
					<input name="_method" type="hidden" value="DELETE">
					<button type="submit" class="btn pl-1 pr-1 m-1">Delete</button>
				</form>
			</div>
			<ul class="list-group list-group-flush">
		    	<li class="list-group-item">{{ $product['product_name'] }}</li>
		    	<li class="list-group-item">MYR {{ $product['unit_cost'] }}</li>
		    	<li class="list-group-item">{{ $product['quantity'] }}</li>
			</ul>


		</div>
	</div>
	@endforeach
</div>

@endsection
