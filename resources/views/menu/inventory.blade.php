@extends('layouts.app')

@section('content')

<div class="container">
	<button class="btn btn-primary float-right" onclick="location.href='{{ url('inventory/add-product') }}'">Add Product</button>
</div>

@endsection
