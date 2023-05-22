@extends('layouts.box')
    
@section('box-content')

<form action="/admin/editcolors/{{$color->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="header">
        <h4 class="modal-title">{{ __('Edit Existing Color') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Color Name:</p>
            <input type="text" name="colorname" id="" class="form-control" value="{{$color->colorname}}">
        </div>
        <div id="code">
            <p class=" mb-1">Color Code(Hex):</p>
            <input type="text" name="colorcode" id="" class="form-control" value="{{$color->colorcode}}">
        </div>
        
        <input type="submit" class="button" value="Save Color">
    </div>
</form>
@endsection