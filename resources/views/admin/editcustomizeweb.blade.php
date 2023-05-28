@extends('layouts.box')
    
@section('box-content')
<form action="/admin/editcustomizeweb/{{$custom->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="header">
        <h4 class="modal-title">{{ __('Customize Website') }}</h4>
    </div>        
    <div class="body d-flex flex-column gap-4">
        <div id="companyName">
            <p class=" mb-1">Company Name:</p>
            <input type="text" name="company" id="" class="form-control" value="{{$custom->company}}" required>
        </div>
        <div id="customColor">
            <p class=" mb-1">Main Color:</p>
            <input type="text" name="maincolor" id="" class="form-control" value="{{$custom->maincolor}}" required>
            <p class=" mb-1">Background Color:</p>
            <input type="text" name="bgcolor" id="" class="form-control" value="{{$custom->bgcolor}}" required>
            <p class=" mb-1">Sidebar Color:</p>
            <input type="text" name="sidebar" id="" class="form-control" value="{{$custom->sidebar}}" required>
            <p class=" mb-1">Button Color:</p>
            <input type="text" name="buttoncolor" id="" class="form-control" value="{{$custom->buttoncolor}}" required>
        </div>
        <div id="images">
            <p class=" mb-1">Logo:</p>
            <input class="form-control" type="file" name="logo" id="" value="{{$custom->logo}}" required>
            <p class=" mb-1">Banner Image:</p>
            <input class="form-control" type="file" name="bannerimg" id="" value="{{$custom->bannerimg}}" required>
            <p class=" mb-1">Login Image:</p>
            <input class="form-control" type="file" name="loginimg" id="" value="{{$custom->loginimg}}" required>
        </div>
        
        <input type="submit" class="button" value="Save Changes">
    </div>
</form>
@endsection
