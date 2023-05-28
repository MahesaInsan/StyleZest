@extends('layouts.box')
    
@section('box-content')

<form action="/admin/editcategories/{{$category->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="header">
        <h4 class="modal-title">{{ __('Edit Existing Category') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Category Name:</p>
            <input type="text" name="categoryName" id="" class="form-control" value="{{$category->categoryName}}">
        </div>
        <div id="description">
            <p class=" mb-1">Description:</p>
            <input type="text" name="categoryDesc" id="" class="form-control" value="{{$category->categoryDesc}}">
        </div>
        
        <input type="submit" class="btn btn-success" value="Save Category">
    </div>
</form>
@endsection