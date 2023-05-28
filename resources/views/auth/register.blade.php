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
    <title>StyleZest - Register</title>
</head>
<body class="h-100 d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('storage/images/customs/' . $custom->bannerimg) }}'); background-repeat: no-repeat; background-size:cover;">
    <div class="container h-75">
        <div class="row justify-content-center align-content-center h-100">
            <div class="col-lg-6 col-sm-9 h-100 d-flex">
                <div class="card flex-grow-1 d-flex flex-column justify-content-center shadow" style="background-color: white;">
                    <div class="card-body d-flex flex-column justify-content-evenly">
                        <div class="d-flex flex-column justify-content-center align-items-center mb-2">
                            <img class="w-50 mb-2" src="{{ asset('storage/images/customs/' . $custom->logo) }}" alt="" style="object-fit: cover">
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="in d-flex flex-column mb-2">
                                <div class="row mb-3 justify-content-center" style="font-size: 1.25rem">
                                    <div class="col-lg-6 col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/person-logo.png')}}" alt=""></span>
                                            <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center" style="font-size: 1.25rem">
                                    <div class="col-lg-6 col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/email-logo.png')}}" alt=""></span>
                                            <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row mb-3 justify-content-center" style="font-size: 1.25rem">
                                    <div class="col-lg-6 col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/lock-logo.png')}}" alt=""></span>
                                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-center" style="font-size: 1.25rem">
                                    <div class="col-lg-6 col-md-9">
                                        <div class="input-group">
                                            <span class="input-group-text" id="basic-addon1"><img style="height:20px" src="{{url('/images/stylezestAssets/lock-logo.png')}}" alt=""></span>
                                            <input placeholder="Confirm Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row mb-0 mt-4">
                                    <div class="col-md-6 offset-md-3" style="font-size: 0.95rem">
                                        <span>Already have an account? <a href="{{ route('login') }}" style="color:black">Login</a></span>
                                    </div>
                                    <div class="col-md-6 offset-md-3">
                                        <button type="submit" class="btn d-flex w-100 justify-content-center text-light" style="background-color:{{$custom->buttoncolor}}">
                                            {{ __('Register') }}
                                        </button>
                                    </div>
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