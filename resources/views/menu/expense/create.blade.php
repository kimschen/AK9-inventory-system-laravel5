<!-- Create Expenses -->
@extends('layouts.app')
@section('content')

<div class="m-3">
	<h3>Expenses</h3>
</div>
<div class="container mt-4">
	<form method="post" action="/expense" accept-charset="utf-8" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="container row">
			<div class="col-lg-4 row">
				<label class="mt-4" for="description">Description :</label>
					<input class="form-control" type="text" name="description">
				<label class="mt-4" for="channel">Channel :</label>
					<input class="form-control" type="text" name="channel">
				<label class="mt-4" for="cost">Cost:</label>
					<input class="form-control" type="number" name="cost">
				<div class="m-5">
					<button type="submit" class="btn btn-success pl-5 pr-5">Add</button>
				</div>
			</div>
		</div>
	</form>
</div>

@endsection
