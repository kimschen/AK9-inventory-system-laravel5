@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <div>
        <ul>
            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li><a href="{{ route('inventory') }}">Inventory</a></li>
            <li><a href="{{ route('order') }}">Order</a></li>
            <li><a href="{{ route('sales') }}">Sales</a></li>
            <li><a href="{{ route('customer') }}">Customer</a></li>
            <li><a href="{{ route('expenses') }}">Expenses</a></li>
        </ul>
    </div>
@endsection
