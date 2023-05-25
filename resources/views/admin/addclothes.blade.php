@extends('layouts.box')
    
@section('box-content')
<form action="/admin/addclothes" method="post" enctype="multipart/form-data">
    @csrf
    <div class="header">
        <h4 class="modal-title">{{ __('Add New Clothes') }}</h4>
    </div>
    <div class="body d-flex flex-column gap-3">
        <div id="image">
            <p class=" mb-1">Image:</p>
            <input class="form-control" type="file" name="inImg" id="" class="form-control">
        </div>
        <div id="name">
            <p class=" mb-1">Clothes Name:</p>
            <input type="text" name="inName" id="" class="form-control">
        </div>
        <div id="description">
            <p class=" mb-1">Description:</p>
            <input type="text" name="inDesc" id="" class="form-control">
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
        <div id="row5" class="row">
            <div class="col">
                <p class=" mb-1">Color:</p>
                <div class="form-control" style="height:5rem; overflow-y:scroll">
                    @foreach ($colors as $color)
                        <input class="form-check-input" type="checkbox" name="inColor[]" value="{{$color->id}}" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            <div style="width:0.5rem; height:0.5rem; background-color:{{$color->colorcode}}"></div>
                            {{$color->colorname}}
                        </label>
                        <br>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div id="size">
                    <p class=" mb-2">Size:</p>
                    <div class="form-control" style="height:5rem; overflow-y:scroll">
                        @foreach ($sizes as $size)
                            <input class="form-check-input" type="checkbox" name="inSize[]" value="{{$size->id}}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                {{$size->sizeCode}} - {{$size->sizeDesc}}
                            </label>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p class=" mb-1">Stock:</p>
                <input type="text" name="inStock" id="" class="form-control">
            </div>
            <div class="col">
                <p class=" mb-1">Price in Rupiah</p>
                <input type="text" name="inPrice" id="" class="form-control">
            </div>
        </div>
        
        <input type="submit" class="button" value="Add Clothes">
    </div>
</form>
@endsection
