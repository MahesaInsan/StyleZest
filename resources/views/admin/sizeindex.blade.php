@extends('layouts.box')
    
@section('box-content')
<table class="table">
    <thead>
        <th>Size</th>
        <th>Description</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($sizes as $sz)
            <tr>
                <td>{{$sz->sizeCode}}</td>
                <td>{{$sz->sizeDesc}}</td>
                <td><a href="/admin/editsizes/{{$sz->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletesizes/{{$sz->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button class="d-flex w-100 justify-content-center"><a  href="/admin/addsize">Add New Size</a></button>
@endsection