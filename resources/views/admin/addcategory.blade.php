@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/admin/addcategory" method="post" enctype="multipart/form-data">
    @csrf
    <div class="header">
        <h4 class="modal-title">{{ __('Add New Category') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Category Name:</p>
            <input type="text" name="categoryName" id="" class="form-control" required>
        </div>
        <div id="description">
            <p class=" mb-1">Description:</p>
            <input type="text" name="categoryDesc" id="" class="form-control" required>
        </div>
        
        <input type="submit" class="btn btn-success" value="Add Category">
    </div>
</form>
@endsection
