@extends('layouts.box')
    
@section('box-content')
<form action="/admin/editclothes/{{$clothes->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="header">
        <h4 class="modal-title">{{ __('Edit Existing Clothes') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Clothes Name:</p>
            <input type="text" name="inName" id="" class="form-control" value="{{$clothes->clothesName}}">
        </div>
        <div id="description">
            <p class=" mb-1">Description:</p>
            <input type="text" name="inDesc" id="" class="form-control" value="{{$clothes->clothesDescription}}">
        </div>
        <div id="row4" class="row">
            <div class="col">
                <p class=" mb-1">Category:</p>
                <select class="form-select" aria-label="Default select example" name="inCategories">
                    @foreach ($categories as $category)
                        <option value={{$category->id}}>
                            {{$category->categoryName}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="col">
                <p class=" mb-1">Gender:</p>
                <select class="form-select" aria-label="Default select example" name="inGender">
                    @foreach ($genders as $gender)
                        <option value={{$gender->id}}>{{$gender->genderName}}</option>
                    @endforeach
                </select>
            </div> 
        </div>
        <div class="row">
            <div class="col">
                <p class=" mb-1">Stock:</p>
                <input type="text" name="inStock" id="" class="form-control" value="{{$clothes->stock}}">
            </div>
            <div class="col">
                <p class=" mb-1">Price in Rupiah</p>
                <input type="text" name="inPrice" id="" class="form-control" value="{{$clothes->price}}">
            </div>
        </div>
        
        <input type="submit" class="btn btn-success" value="Save Clothes">
    </div>
</form>
@endsection
