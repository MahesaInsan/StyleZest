@extends('layouts.box')
    
@section('box-content')
<table class="table">
    <thead>
        <th>Color Name</th>
        <th>Code</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($colors as $col)
            <tr>
                <td>{{$col->colorname}}</td>
                <td>{{$col->colorcode}}</td>
                <td><a href="/admin/editcolors/{{$col->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletecolors/{{$col->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button class="d-flex w-100 justify-content-center"><a  href="/admin/addcolor">Add New Color</a></button>
@endsection