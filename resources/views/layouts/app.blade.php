<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" style="height:100vh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('cdn')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <style>
        .accordion-item {
            background-color: transparent !important;
        }
        .accordion-button {
            background-color: transparent !important;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="h-100">
    <div id="app" class="h-100 d-flex flex-column">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #3AAFA9; height:5%;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @if (Auth::user()->isAdmin == 1)
                        {{-- <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link">User</a>
                        </li> --}}
                    @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li>
                                <a href="">
                                    <img src="" alt="">
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="" alt="">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @if (Auth::user()->isAdmin == 0)
                                    {{-- edit profile and password section --}}
                                        <a class="dropdown-item" href="{{ route('admin.edit-profile') }}">
                                            Edit Profile
                                        </a>

                                        <a class="dropdown-item" href="{{ route('admin.edit-password') }}">
                                            Edit Password
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @else
                                        {{-- edit profile and password (admin) --}}
                                        <a class="dropdown-item" href="{{ route('admin.edit-profile') }}">
                                            Edit Profile
                                        </a>

                                        <a class="dropdown-item" href="{{ route('admin.edit-password') }}">
                                            Edit Password
                                        </a>

                                        <a class="dropdown-item" href="{{ route('users.index') }}">
                                            Account panel
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    @endif
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div id="content-layout" class="d-flex flex-column" style="height:95%">
            <div id="image-placeholder" class="border" style="height:20%">
                <img src="" alt="" class="">
            </div>
            <main class="col-md-10 offset-md-1 border flex-grow-1" style="height:80%; margin-top:-2%; background-color:white;">
                @yield('content')
            </main>
        </div>
        
    </div>
</body>
</html>
