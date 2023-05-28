@extends('layouts.app')

@section('content')
<div class="w-100 text-center fw-bold p-4 pb-0" style="font-size:1.2rem">User List<hr></div>
{{-- User content --}}
    <div class="p-5 table-responsive">
        <table class="table" style="font-size: 1.15rem">
            <thead>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($users as $key => $item)
                    <tr class="align-middle"> 
                        <td>{{ ++$key }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phoneNumber }}</td>
                        <td>{{ $item->address }}</td>
                        <td>
                            <form action="{{ route('users.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
