@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
<div class="w-100 text-center fw-bold" style="font-size:1.2rem">Categories List<hr></div>
<table class="table" style="font-size: 1.15rem">
    <thead>
        <th>Category</th>
        <th>Description</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($categories as $ctg)
            <tr class="align-middle">
                <td>{{$ctg->categoryName}}</td>
                <td>{{$ctg->categoryDesc}}</td>
                <td><a class="btn btn-primary" href="/admin/editcategories/{{$ctg->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletecategories/{{$ctg->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="d-flex w-100 justify-content-center btn btn-secondary" href="/admin/addcategory">Add New Category</a>
@if(session('success'))
    <script>
        // Automatically close the success alert after 3 seconds
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2500);
    </script>
@endif
@endsection