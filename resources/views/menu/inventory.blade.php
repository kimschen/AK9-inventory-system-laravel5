@extends('layouts.app')

@section('content')

<div class="container">
	<button class="btn btn-primary float-right" onclick="">Add Product</button>
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
