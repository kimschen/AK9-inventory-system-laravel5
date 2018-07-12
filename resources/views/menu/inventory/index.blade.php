<!-- Product index -->

@extends('layouts.app')
@section('content')

<div class="container">
	<button class="btn btn-primary float-right" onclick="window.location='{{ route('create') }}';">Add Product</button>
</div>

@foreach($products as $product)
<div class="container">
	<div class="card" style="width: 12rem;">
	 	<img class="card-img-top" src="{{ $product->image_path}}" alt="product-image">
		<ul class="list-group list-group-flush">
	    	<li class="list-group-item">{{ $product->name }}</li>
	    	<li class="list-group-item">{{ $product->unit_cost }}</li>
	    	<li class="list-group-item">{{ $product->quantity }}</li>
		</ul>
		<div class="container">
		<button type="submit" class="btn btn-secondary pl-2 pr-2 m-1" onclick="window.location='{{ action('Menu\InventoryController@edit', $product->id) }}';">Edit</button>
		<form method="post" action="{{ action('Menu\InventoryController@destroy', $product->id) }}">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="DELETE">
			<button type="submit" class="btn btn-danger pl-2 pr-2 m-1">Delete</button>
		</form>
		</div>
	</div>
</div>

@endforeach
@endsection