@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="w-100 text-center fw-bold" style="font-size:1.2rem">Sizes List<hr></div>
<form action="/admin/addsize" method="post" enctype="multipart/form-data" style="font-size: 1.15rem">
    @csrf
    <div class="header">
        <h4 class="modal-title">{{ __('Add New Size') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Size:</p>
            <input type="text" name="categoryName" id="" class="form-control">
        </div>
        <div id="description">
            <p class=" mb-1">Description:</p>
            <input type="text" name="categoryDesc" id="" class="form-control">
        </div>
        
        <input type="submit" class="btn btn-success" value="Add Size">
    </div>
</form>
@endsection