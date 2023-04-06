<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('cdn')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StyleZest - Register</title>
</head>
<body class="h-100 d-flex justify-content-center align-items-center">
    <div class="h-75 d-flex justify-content-center align-items-center rounded shadow" style="background-color: #3AAFA9; width:30%">

        <form class="d-flex flex-column w-75 gap-3 fw-bold" action="/register" method="post">
            @csrf
            <img class="w-50 align-self-center" src={{url('/img/Dark-Logo-StyleZest.png')}} alt="">
            <div class="d-flex flex-column w-100" id="name-container">
                <p>Name</p>
                <input type="text" class="border-0 rounded p-1 px-2" name="inName" id="">
            </div>

            <div class="d-flex flex-column w-100" id="email-container">
                <p>Email</p>
                <input type="text" class="border-0 rounded p-1 px-2" name="inEmail" id="">
            </div>

            <div class="d-flex flex-column w-100" id="password-container">
                <p>Password</p>
                <input type="password" class="border-0 rounded p-1 px-2"name="inPass" id="">
            </div>
            
            <div class="d-flex flex-column w-100" id="pnum-container">
                <p>Phone Number</p>
                <input type="text" class="border-0 rounded p-1 px-2" name="inPnum" id="">   
            </div>
            
            <div class="d-flex flex-column w-100" id="address-container">
                <p>Address</p>
                <input type="text" class="border-0 rounded p-1 px-2" name="inAddr" id="">
            </div>

            <div class="d-flex flex-column w-100 mt-4" id="regis-container">
                <p class="w-75 pb-2 align-self-center text-center">Already have an account? <a href="{{url('login')}}" class="text-white">Login</a></p>
                <input type="submit" class="border-0 rounded py-3 fw-bold w-75 align-self-center" value="Register">
            </div>
        </form>
    </div>
</body>
</html>