<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')
    <title>StyleZest - Register</title>
</head>
<body class="h-100 d-flex justify-content-center align-items-center">
    <div class="container h-75">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-md-6 h-100 d-flex">
                <div class="card flex-grow-1 d-flex flex-column justify-content-center" style="background-color: #3AAFA9;">
                    <div class="card-body d-flex flex-column justify-content-center">
                        <div class="d-flex flex-column justify-content-center align-items-center mb-4">
                            <img class="w-25 mb-2" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/95/Instagram_logo_2022.svg/1024px-Instagram_logo_2022.svg.png" alt="">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="in d-flex flex-column mb-2">
                                <div class="row mb-3" style="font-size: 1.25rem">
                                    <div class="w-50 input-group col-md-6 offset-3">
                                        <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/person-logo.png')}}" alt=""></span>
                                        <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3" style="font-size: 1.25rem">
                                    <div class="w-50 input-group col-md-6 offset-3">
                                        <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/email-logo.png')}}" alt=""></span>
                                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3" style="font-size: 1.25rem">
                                    <div class="w-50 input-group col-md-6 offset-3">
                                        <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/lock-logo.png')}}" alt=""></span>
                                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3" style="font-size: 1.25rem">
                                    <div class="w-50 input-group col-md-6 offset-3">
                                        <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/lock-logo.png')}}" alt=""></span>
                                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                
                                <div class="row mb-0 mt-2">
                                    <div class="col-md-6 offset-md-3" style="font-size: 0.95rem">
                                        <span>Already have an account? <a href="{{ route('login') }}" style="color:black">Login</a></span>
                                    </div>
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn btn-secondary d-flex w-100 justify-content-center">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-2">
                                
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

{{--                                 <div class="row mb-3">
    <div class="col-md-6 offset-3">
                                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                
                                {{-- <div class="row mb-3">
                                    <div class="col-md-6 offset-3">
                                        <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
        
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div> --}}
                                {{--                                 <div class="row mb-3">
                                                                    <div class="col-md-6 offset-3">
                                                                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                                                        
                                                                        @error('password')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{ $message }}</strong>
                                                                        </span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="row mb-3">
                                                                    <div class="col-md-6 offset-3">
                                                                        <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                                                    </div>
                                                                </div>
                                                            </div> --}}