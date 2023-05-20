@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <a href="/admin/home"><button type="button" class="btn btn-invisible">Clothes</button></a><br><br>
            <a href="/admin/sizeindex"><button type="button" class="btn btn-invisible">Size</button></a><br>
        </div>
        <div class="col-10">
            @yield('box-content')
        </div>
    </div>
</div>
@endsection