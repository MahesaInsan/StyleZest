@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/admin/addsize" method="post" enctype="multipart/form-data">
    @csrf
    <div class="header">
        <h4 class="modal-title">{{ __('Add New Size') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Size :</p>
            <input type="text" name="sizeName" id="" class="form-control" required>
        </div>
        <div id="description">
            <p class=" mb-1">Description:</p>
            <input type="text" name="sizeDesc" id="" class="form-control" required>
        </div>
        
        <input type="submit" class="btn btn-success" value="Add Size">
    </div>
</form>
@endsection