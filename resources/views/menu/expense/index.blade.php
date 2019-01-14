<!-- Expense Index -->
@extends('layouts.app')
@section('content')

<div class="container">
	<button class="btn btn-primary float-right" onclick="window.location='{{ route('create') }}';">Add (+)</button>
</div>
<br><br><br>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th class="text-center">Date</th>
                <th>Description</th>
                <th class="text-center">Channel</th>
                <th class="text-center">Cost</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
        </thead>
        @foreach ($expenses as $expense)
        <tbody>
            <tr>
                <td class="text-center">{{ date('d-m-Y'), strtotime($expense->created_at) }}</td>
                <td width="60%">{{ $expense->description }}</td>
                <td class="text-center">{{ $expense->channel }}</td>
                <td class="text-center">{{ $expense->cost }}</td>
                <td class="pr-1 text-center">
                    <button type="submit" class="btn btn-secondary" onclick="window.location='{{ action('Menu\ExpenseController@edit', $expense['id']) }}';">Edit</button>
                </td>
                <td>
                    <form method="post" action="{{ action('Menu\ExpenseController@destroy', $expense['id']) }}">
                        {{ csrf_field() }}
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection
