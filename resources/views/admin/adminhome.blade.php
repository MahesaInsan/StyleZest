@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
<table class="table">
    <thead>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Price</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($clothes as $cl)
            <tr class="align-middle">
                <td>{{$cl->image}}</td>
                <td>{{$cl->clothesName}}</td>
                <td>{{$cl->clothesDescription}}</td>
                <td>{{$cl->stock}}</td>
                <td>{{$cl->price}}</td>
                <td><a class="btn btn-primary" href="/admin/editclothes/{{$cl->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deleteclothes/{{$cl->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="btn btn-secondary d-flex w-100 justify-content-center" href="/admin/addclothes">Add New Clothes</a>
@if(session('success'))
    <script>
        // Automatically close the success alert after 3 seconds
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2500);
    </script>
@endif
@endsection