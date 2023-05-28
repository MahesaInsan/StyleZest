@extends('layouts.box')
    
@section('box-content')

<form action="/admin/editsizes/{{$size->id}}" method="post" enctype="multipart/form-data" style="font-size: 1.15rem">
    @csrf
    @method('put')
    <div class="header">
        <h4 class="modal-title">{{ __('Edit Size') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Size Code:</p>
            <input type="text" name="sizeName" id="" class="form-control" value="{{$size->sizeCode}}">
        </div>
        <div id="description">
            <p class=" mb-1">Description:</p>
            <input type="text" name="sizeDesc" id="" class="form-control" value="{{$size->sizeDesc}}">
        </div>
        
        <input type="submit" class="btn btn-success" value="Save Changes">
    </div>
</form>
@endsection
