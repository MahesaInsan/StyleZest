@extends('layouts.box')
    
@section('box-content')
<table class="table">
    <thead>
        <th>ID</th>
        <th>Total Item</th>
        <th>Total Price</th>
        <th>Username</th>
        <th>Status</th>
        <th>DELETE</th>
    </thead>
    <tbody>
        @foreach ($transactionD as $trd)
            <tr>
                <td>{{$trd->id}}</td>
                <td>{{$trd->totItem}}</td>
                <td>{{$trd->totPrice}}</td>
                <td>{{$trd->user->name}}</td>
                @if ($trd->isPaid == false)
                    <td>Not Paid</td>
                @else <td>Paid</td>
                @endif
                
                <td>
                    {{-- <form action="/admin/deletecolors/{{$col->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form> --}}
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection