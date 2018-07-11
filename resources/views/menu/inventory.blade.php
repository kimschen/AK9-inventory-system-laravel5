@extends('layouts.app')
@section('content')

<div class="container">
	<button class="btn btn-primary float-right" onclick="window.location='{{ route('create') }}';">Add Product</button>
</div>

<!-- Show product -->
@foreach($products as $product)
<div class="container">
	<div class="card" style="width: 12rem;">
	 	<a href="{{ route('edit', $product->id) }}"><img class="card-img-top" src="{{ $product->image_path}}" alt="product-image"></a>
		<ul class="list-group list-group-flush">
			<input hidden type="text" value="{{ $product->id }}">
	    	<li class="list-group-item">{{ $product->name }}</li>
	    	<li class="list-group-item">{{ $product->unit_cost }}</li>
	    	<li class="list-group-item">{{ $product->quantity }}</li>
		</ul>
	</div>
</div>

@endforeach
@endsection