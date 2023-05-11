@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            TEST
        </div>
        <div class="col-10">
            @yield('box-content')
        </div>
    </div>
</div>
@endsection