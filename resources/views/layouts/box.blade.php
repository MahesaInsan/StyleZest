@extends('layouts.app')

@section('content')
<div class="h-100 w-100 d-flex flex-column justify-content-center align-items-center">
    <div class="row h-100 w-100">
        <div class="col border-end border-3" style="padding:0px">
            <div class="pt-4 h-100 d-flex flex-column justify-content-between pb-4" style="background-color:{{$custom->sidebar}};">
                <div>
                    <a href="/admin/home"><button type="button" class="btn btn-invisible w-100 text-start">Clothes</button></a><br><hr>
                    <a href="/admin/category"><button type="button" class="btn btn-invisible w-100 text-start">Category</button></a><br><hr>
                    <a href="/admin/sizeindex"><button type="button" class="btn btn-invisible w-100 text-start">Size</button></a><br><hr>
                    <a href="/admin/color"><button type="button" class="btn btn-invisible w-100 text-start">Color</button></a><br><hr>
                    <a href="/admin/gender"><button type="button" class="btn btn-invisible w-100 text-start">Gender</button></a><br><hr>
                </div>
                <div>
                    <a href="/admin/addclothes"><button type="button" class="btn btn-invisible">Transaction History</button></a><br><hr>
                    <a href="/admin/customizeweb"><button type="button" class="btn btn-invisible">Customize Webpage</button></a>
                </div>
            </div>
        </div>
        <div class="col-9 p-4 pt-4" style="overflow-y:auto; max-height:100%">
            @yield('box-content')
        </div>
    </div>
</div>
@endsection