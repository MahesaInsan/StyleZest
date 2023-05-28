@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
<div class="w-100 text-center fw-bold" style="font-size:1.2rem">Sizes List<hr></div>
<table class="table" style="font-size: 1.15rem">
    <thead>
        <th>Size</th>
        <th>Description</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($sizes as $sz)
            <tr class="align-middle">
                <td>{{$sz->sizeCode}}</td>
                <td>{{$sz->sizeDesc}}</td>
                <td><a class="btn btn-primary" href="/admin/editsizes/{{$sz->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletesizes/{{$sz->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="d-flex w-100 justify-content-center btn btn-secondary" href="/admin/addsize">Add New Size</a>
@if(session('success'))
    <script>
        // Automatically close the success alert after 3 seconds
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2500);
    </script>
@endif
@endsection