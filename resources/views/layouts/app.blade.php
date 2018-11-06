<!DOCTYPE html>

<!-- Master HTML -->
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'AK9') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

</head>
<body>

<div id="app">

<!-- User Authentication -->
@if (Auth::user())

<!-- Sidebar Menu -->
<div class="row">
    <div class="sidebar">
        <ul>
            <li class="bg-menu btn-menu">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('inventory') }}">Inventory</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('sales') }}">Sales</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('order') }}">Order</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('purchase-order') }}">Purchase Order</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('return') }}">Return</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('customer') }}">Customer</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('supplier') }}">Supplier</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('expenses') }}">Expenses</a>
            </li>
            <li class="bg-menu btn-menu">
                <a href="{{ route('setting') }}">Setting</a>
            </li>
        </ul>
    </div>

    <!-- Top Title -->
    <div class="col-sm">
        <nav class="navbar navbar-expand-lg bg-dark content" style="color: white;">
            <h4 class="mx-auto">AK9</h4>

            <!-- Logout Dropdown -->
            <div class="justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a href="{{ route('logout') }}" class="dropdown-item"
                               onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                  style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Current Page Title -->
        <div class="h5 text-uppercase route-name content mb-0">
            {{ Request::route()->getName() }}
        </div>

        <!-- Status Message -->
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show content" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger content">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- User Content -->
        <div class="content mt-3"> @yield('content') </div>

    </div>

    <!-- Guest View -->
    @else
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Guest Content -->
    @yield('content')

</div><!-- END .row -->
@endif

</div><!-- END #app -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
