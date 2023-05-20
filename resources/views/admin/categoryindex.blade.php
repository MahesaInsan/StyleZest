@extends('layouts.box')
    
@section('box-content')
<table class="table">
    <thead>
        <th>Category</th>
        <th>Description</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($categories as $ctg)
            <tr>
                <td>{{$ctg->categoryName}}</td>
                <td>{{$ctg->categoryDesc}}</td>
                <td><a href="/admin/editcategories/{{$ctg->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletecategories/{{$ctg->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button class="d-flex w-100 justify-content-center"><a  href="/admin/addcategory">Add New Category</a></button>
@endsection