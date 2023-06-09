<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
            font-family: 'Roboto', sans-serif;
        }
    </style>
    <title>StyleZest - Login</title>
</head>
<body class="h-100 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('storage/images/customs/' . $custom->bannerimg) }}'); background-repeat: no-repeat; background-size:cover;">
    <div class="container h-75">
        <div class="row justify-content-center align-content-center h-100 ">
            <div class="col-lg-6 col-sm-9 h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="card h-100 w-100 d-flex flex-column justify-content-center shadow" style="background-color:white;">
                    <div class="card-body w-100 gap-md-5 gap-sm-3 d-flex flex-column justify-content-evenly">
                        <div class="d-flex flex-column justify-content-center align-items-center fw-bold pb-1" style="font-size:2rem">{{-- {{ __('Login') }} --}}
                            <img class="w-50 mb-1" src="{{ asset('storage/images/customs/' . $custom->logo) }}" alt="" style="object-fit: cover">
                            <p style="font-size: 1.75rem">Welcome Back!</p>
                        </div>
                        <form class="d-flex flex-column align-items-center justify-content-center w-100 flex-grow-1" method="POST" action="{{ route('login') }}">
                            @csrf
                            
                            <div class="d-flex flex-column align-items-center w-100 flex-grow-1">
                                <div class="row mb-3 d-flex justify-content-center w-100" style="font-size: 1.25rem">
                                    <div class="col-lg-6 col-sm-9">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/email-logo.png')}}" alt=""></span>
                                            <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-3 d-flex justify-content-center w-100" style="font-size: 1.25rem">
                                    <div class="col-lg-6 col-sm-9">
                                        <div class="w-md-50 w-sm-75 input-group">
                                            <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/lock-logo.png')}}" alt=""></span>
                                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3 w-100 justify-content-center">
                                    <div class="col-lg-6 col-sm-9">
                                        <div class="form-check" style="font-size:0.95rem">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            
                                            <label class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row pb-4 w-100 justify-content-center">
                                <div class="d-flex flex-column col-lg-6 col-sm-9 gap-2">
                                    <div class="" style="font-size: 0.95rem">
                                        <span>Don't have an account? <a href="{{ route('register') }}" style="color:black">Register</a></span>
                                    </div>
                                    
                                    <button type="submit" class="btn text-light" style="background-color:{{$custom->buttoncolor}}">
                                        {{ __('Login') }}
                                    </button>
                                    
{{--                                     @if (Route::has('password.request'))
                                        <a class="btn btn-link d-flex justify-start ps-0" style="font-size: 0.95rem" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif --}}
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
{{--                             <div class="row mb-3 d-flex justify-content-center w-100" style="font-size: 1.25rem">
    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
    <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
        <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
        
        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
</div> --}}
{{--                             <div class="row mb-3 d-flex justify-content-center w-100" style="font-size: 1.25rem">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                                    
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}