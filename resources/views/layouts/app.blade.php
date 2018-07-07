<!DOCTYPE html>

<!-- MASTER HTML -->
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

    <!-- User View -->
    @if (Auth::user())

    <div class="row no-gutters">

        <!-- Menu -->
        <div id="menu" class="col-xs">
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('dashboard') }}">Dashboard</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('inventory') }}">Inventory</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('sales') }}">Sales</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('order') }}">Order</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('purchase-order') }}">Purchase Order</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('customer') }}">Customer</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('return') }}">Return</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('supplier') }}">Supplier</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('expenses') }}">Expenses</a>
            <a class="nav-link [ bg-menu btn-menu ]" href="{{ route('setting') }}">Setting</a>
        </div>

        <!-- Navigation Bar -->
        <div class="col-sm">
            <nav class="navbar navbar-expand-lg bg-dark" style="color: white;">
                <h4 class="mx-auto">AK9</h4>

                <!-- Logout -->
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

            <!-- Flash Message -->
            @if (session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="container h5 text-uppercase [ route-name ]">
                {{ Request::route()->getName() }}
            </div>

            <!-- User Content -->
            @yield('content')
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
{{-- <script src="{{ asset('js/script.js') }}"></script>
 --}}
</body>
</html>
