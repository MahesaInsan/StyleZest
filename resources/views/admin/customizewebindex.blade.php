@extends('layouts.box')
    
@section('box-content')    
<div class="body d-flex flex-column gap-4">
    <div id="companyName">
        <p class=" mb-1"><strong>Company Name: </strong><span>{{$custom->company}}</span></p>
    </div>
    <div id="customColor">
        <p class=" mb-1"><strong>Main Color: </strong><span>{{$custom->maincolor}}</span></p>
        <p class=" mb-1"><strong>Background Color: </strong><span>{{$custom->bgcolor}}</span></p>
        <p class=" mb-1"><strong>Sidebar Color: </strong><span>{{$custom->sidebar}}</span></p>
        <p class=" mb-1"><strong>Button Color: </strong><span>{{$custom->buttoncolor}}</span></p>
    </div>
    <div id="images">
        <p class=" mb-1"><strong>Logo: </strong><span>{{$custom->logo}}</span></p>
        <p class=" mb-1"><strong>Banner Image: </strong><span>{{$custom->bannerimg}}</span></p>
        <p class=" mb-1"><strong>Login Image: </strong><span>{{$custom->loginimg}}</span></p>
    </div>
    <a class="d-flex w-100 justify-content-center btn btn-primary" href="/admin/editcustomizeweb/{{$custom->id}}">Customize Website</a>
</div>

@endsection
