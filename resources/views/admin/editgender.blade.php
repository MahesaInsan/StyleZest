@extends('layouts.box')
    
@section('box-content')

<form action="/admin/editgenders/{{$gender->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="header">
        <h4 class="modal-title">{{ __('Edit Existing Gender') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Gender Name:</p>
            <input type="text" name="genderName" id="" class="form-control" value="{{$gender->genderName}}">
        </div>
        
        <input type="submit" class="btn btn-success" value="Save Gender">
    </div>
</form>
@endsection