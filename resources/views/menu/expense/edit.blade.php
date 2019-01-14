<!-- Edit Expense -->
@extends('layouts.app')
@section('content')

<div class="container mt-4">
    <form method="post" action="{{ action('Menu\ExpenseController@update', $id) }}" accept-charset="utf-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="container row">
            <div class="col-lg-4 row">
                <input name="_method" type="hidden" value="PATCH">
                <label class="mt-4" for="description">Description:</label>
                    <input class="form-control" type="text" name="description" value="{{ $expenses->description }}">
                <label class="mt-4" for="channel">Channel:</label>
                    <input class="form-control" type="text" name="channel" value="{{ $expenses->channel }}">
                <label class="mt-4" for="cost">Cost:</label>
                    <input class="form-control" type="number" name="cost" value="{{ $expenses->cost }}">
            </div>
        </div>
        <div class="mt-4">
            <button class="btn btn-primary" type="submit">Update</button>
            <button class="btn btn-danger" type="button" onclick="window.location='{{ route('expense') }}';">Cancel</button>
        </div>
    </form>
</div>
@endsection