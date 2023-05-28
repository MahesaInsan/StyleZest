@extends('layouts.box')
    
@section('box-content')
@if(session('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>
@endif
<div class="w-100 text-center fw-bold" style="font-size:1.2rem">Transaction List<hr></div>
<table class="table" style="font-size: 1.15rem">
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
            <tr class="align-middle">
                <td>{{$trd->id}}</td>
                <td>{{$trd->totItem}}</td>
                <td>{{$trd->totPrice}}</td>
                <td>{{$trd->user->name}}</td>
                @if ($trd->isPaid == false)
                    <td>Not Paid</td>
                @else <td>Paid</td>
                @endif
                
                <td>
                    <form action="/admin/deletetransaction/{{$trd->id}}"method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
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