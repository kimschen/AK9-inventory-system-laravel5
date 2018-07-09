@extends('layouts.app')

@section('content')

<div class="container">
	<button class="btn btn-primary float-right" onclick="window.location='{{ route('add product') }}';">Add Product</button>
</div>

<div class="container">
	@foreach($products as $product)
	<div class="card" style="width: 12rem;">
	 	<img class="card-img-top" src="{{ $product->image_path}}" alt="product-image">
		<ul class="list-group list-group-flush">
	    	<li class="list-group-item">{{ $product->name }}</li>
	    	<li class="list-group-item">{{ $product->unit_cost }}</li>
	    	<li class="list-group-item">{{ $product->quantity }} </li>
		</ul>
		<div class="card-body">
			<a href="#" class="card-link">Edit</a>
			<a href="#" class="card-link">Delete</a>
	</div>
	@endforeach
</div>

<div class="container">
	<div class="modal" tabindex="-1" role="dialog">
	  	<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<h5 class="modal-title">Modal title</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	    		</div>
	      		<div class="modal-body">
	        		<p>Modal body text goes here.</p>
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        		<button type="button" class="btn btn-primary">Save changes</button>
	      		</div>
	    	</div>
	  	</div>
	</div>
</div>
@endsection