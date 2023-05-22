@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/admin/addcolor" method="post" enctype="multipart/form-data">
    @csrf
    <div class="header">
        <h4 class="modal-title">{{ __('Add New Colors') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Color Name:</p>
            <input type="text" name="colorname" id="" class="form-control">
        </div>
        <div id="code">
            <p class=" mb-1">Color Code(Hex):</p>
            <input type="text" name="colorcode" id="" class="form-control">
        </div>
        <input type="submit" class="button" value="Add Color">
    </div>
</form>
@endsection