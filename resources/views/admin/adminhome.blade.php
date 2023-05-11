@extends('layouts.box')
    
@section('box-content')
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
            <tr>
                <td>{{$cl->image}}</td>
                <td>{{$cl->clothesName}}</td>
                <td>{{$cl->clothesDescription}}</td>
                <td>{{$cl->stock}}</td>
                <td>{{$cl->price}}</td>
                <td><a href="/admin/editclothes/{{$cl->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deleteclothes/{{$cl->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button class="d-flex w-100 justify-content-center"><a  href="/admin/addclothes">Add New Clothes</a></button>
@endsection