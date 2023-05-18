@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            <a href="/admin/home"><button type="button" class="btn btn-invisible">Clothes</button></a><br><br>
            <a href="/admin/category"><button type="button" class="btn btn-invisible">Category</button></a><br><br>
            <a href="/admin/addclothes"><button type="button" class="btn btn-invisible">Size</button></a><br><br>
            <a href="/admin/color"><button type="button" class="btn btn-invisible">Color</button></a><br><br>
            <a href="/admin/addclothes"><button type="button" class="btn btn-invisible">Transaction History</button></a><br><br>
            <a href="/admin/addclothes"><button type="button" class="btn btn-invisible">Customize Webpage</button></a>
        </div>
        <div class="col-10">
            @yield('box-content')
        </div>
    </div>
</div>
@endsection