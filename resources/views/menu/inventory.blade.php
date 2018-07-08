@extends('layouts.app')

@section('content')

<div class="container">
	<button class="btn btn-primary float-right" onclick="window.location='{{ route('add product') }}';">Add Product</button>
</div>
<div class="container">

	<div class="card" style="width: 12rem;">
	 	<img class="card-img-top" src="../images/product-sample.png" alt="product-image">
		<ul class="list-group list-group-flush">
	    	<li class="list-group-item">Product: </li>
	    	<li class="list-group-item">Unit Cost: </li>
	    	<li class="list-group-item">Stock: </li>
		</ul>
	</div>
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