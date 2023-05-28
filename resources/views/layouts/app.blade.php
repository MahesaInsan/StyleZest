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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
        }
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
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: {{$custom->maincolor}}; height:7.5%;">
            <div class="container h-100">
                <a class="navbar-brand d-flex align-items-center gap-2 h-100" href="{{ url('home') }}">
                    <img class="me-2"src="{{ asset('storage/images/customs/'. $custom->logo) }}" alt="" style="object-fit: cover; height:200%">
                    <p class="mb-0 fw-bold" style="font-size:1.5rem">{{$custom->company}}</p>
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
                            <li class="d-flex align-items-center">
                                <a href="{{ url('/transaction') }}">
                                    <img class="h-75 pe-2" src="{{url('/images/stylezestAssets/cart-logo.png')}}" alt="">
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="font-size: 1rem" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                                        <a class="dropdown-item" href="{{ route('adminhome') }}">
                                            Admin Page
                                        </a>

                                        <a class="dropdown-item" href="{{ route('home') }}">
                                            User Page
                                        </a>

                                        <a class="dropdown-item" href="{{ route('admin.edit-profile') }}">
                                            Edit Profile
                                        </a>

                                        <a class="dropdown-item" href="{{ route('admin.edit-password') }}">
                                            Edit Password
                                        </a>

                                        <a class="dropdown-item" href="{{ route('users.index') }}">
                                            Account Panel
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

        <div id="content-layout" class="d-flex flex-column" style="height:92.5%; background-color:{{$custom->bgcolor}};">
            <div id="image-placeholder" class="border" style="height:20%; background-image: url('{{ asset('storage/images/customs/' . $custom->bannerimg) }}'); background-repeat: no-repeat; background-size:cover;">
                <img src="" alt="" class="">
            </div>
            <main class="col-md-10 offset-md-1 border flex-grow-1 shadow-sm" style="height:80%; margin-top:-2%; background-color:white">
                @yield('content')
            </main>
        </div>
        
    </div>
</body>
</html>
