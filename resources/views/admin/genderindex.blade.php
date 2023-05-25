@extends('layouts.box')
    
@section('box-content')
<table class="table">
    <thead>
        <th>Gender</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($genders as $gnd)
            <tr>
                <td>{{$gnd->genderName}}</td>
                <td><a href="/admin/editgenders/{{$gnd->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletegenders/{{$gnd->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<button class="d-flex w-100 justify-content-center"><a  href="/admin/addgender">Add New Gender</a></button>
@endsection