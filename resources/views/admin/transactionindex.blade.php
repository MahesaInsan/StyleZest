@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
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
@if(session('success'))
    <script>
        // Automatically close the success alert after 3 seconds
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 2500);
    </script>
@endif
@endsection