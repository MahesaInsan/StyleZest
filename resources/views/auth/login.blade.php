<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')
    <title>StyleZest - Login</title>
</head>
<body class="h-100 d-flex justify-content-center align-items-center">
    <div class="container h-75">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-md-6 w-50 h-100 d-flex flex-column justify-content-center align-items-center">
                <div class="card h-100 d-flex flex-column justify-content-center" style="background-color: #3AAFA9;">
                    <div class="card-body gap-4 d-flex flex-column justify-content-center">
                        <div class="d-flex flex-column justify-content-center align-items-center fw-bold" style="font-size:2rem">{{-- {{ __('Login') }} --}}
                            <img class="w-25" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" alt="">
                            <p>Welcome Back!</p>
                        </div>
                        <form class="d-flex flex-column align-items-center justify-content-center w-100" method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3 d-flex justify-content-center w-100" style="font-size: 1.25rem">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> --}}
    
                                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                                    
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3 d-flex justify-content-center w-100" style="font-size: 1.25rem">
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> --}}
    
                                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3 w-100 justify-content-center">
                                <div class="col-xl-6 col-lg-8 col-md-10 col-sm-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0 w-100 justify-content-center">
                                <div class="d-flex flex-column col-xl-6 col-lg-8 col-md-10 col-sm-12">

                                    <button type="submit" class="btn btn-secondary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link d-flex justify-start ps-0" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
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