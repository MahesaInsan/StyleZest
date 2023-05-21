@extends('layouts.box')

@section('box-content')
    <div class="table-responsive">

        <table class="table">
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
                    <tr>
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
