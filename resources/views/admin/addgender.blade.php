@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="/admin/addgender" method="post" enctype="multipart/form-data">
    @csrf
    <div class="header">
        <h4 class="modal-title">{{ __('Add New Gender') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="name">
            <p class=" mb-1">Gender :</p>
            <input type="text" name="genderName" id="" class="form-control" required>
        </div>
        
        <input type="submit" class="btn btn-success" value="Add Gender">
    </div>
</form>
@endsection