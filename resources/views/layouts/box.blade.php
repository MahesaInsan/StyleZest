@extends('layouts.app')

@section('content')
<div class="h-100 d-flex">
    <div class="row flex-grow-1">
        <div class="col border-end p-4">
            <a href="/admin/home"><button type="button" class="btn btn-invisible text-start w-100">Clothes</button></a><br><br>
            <a href="/admin/category"><button type="button" class="btn btn-invisible text-start w-100">Category</button></a><br><br>
            <a href="/admin/sizeindex"><button type="button" class="btn btn-invisible text-start w-100">Size</button></a><br><br>
            <a href="/admin/color"><button type="button" class="btn btn-invisible text-start w-100">Color</button></a><br><br>
            <a href="/admin/addclothes"><button type="button" class="btn btn-invisible text-start w-100">Transaction History</button></a><br><br>
            <a href="/admin/addclothes"><button type="button" class="btn btn-invisible text-start w-100">Customize Webpage</button></a>
        </div>
        <div class="col-9 p-4">
            @yield('box-content')
        </div>
    </div>
</div>
@endsection