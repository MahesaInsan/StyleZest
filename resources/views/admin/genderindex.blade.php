@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
<table class="table">
    <thead>
        <th>Gender</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($genders as $gnd)
            <tr class="align-middle">
                <td>{{$gnd->genderName}}</td>
                <td><a class="btn btn-primary" href="/admin/editgenders/{{$gnd->id}}">Edit</a></td>
                <td>
                    <form action="/admin/deletegenders/{{$gnd->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<a class="d-flex w-100 justify-content-center btn btn-secondary" href="/admin/addgender">Add New Gender</a>
@if(session('success'))
    <script>
        // Automatically close the success alert after 3 seconds
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2500);
    </script>
@endif
@endsection