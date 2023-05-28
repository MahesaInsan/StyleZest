@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
<div class="w-100 text-center fw-bold" style="font-size:1.2rem">Colors List<hr></div>
<table class="table" style="font-size: 1.15rem">
    <thead>
        <th>Color Name</th>
        <th>Code</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($colors as $col)
            <tr class="align-middle">
                <td>{{$col->colorname}}</td>
                <td>{{$col->colorcode}}</td>
                <td><a class="btn btn-primary" href="/admin/editcolors/{{$col->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletecolors/{{$col->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="d-flex w-100 justify-content-center btn btn-secondary" href="/admin/addcolor">Add New Color</a>
@if(session('success'))
    <script>
        // Automatically close the success alert after 3 seconds
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2500);
    </script>
@endif
@endsection