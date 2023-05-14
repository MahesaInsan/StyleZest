@extends('layouts.box')
    
@section('box-content')

<table class="table">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Stock</th>
        <th>Price</th>
    </thead>
    <tbody>
        @foreach($clothes as $cl)
        <tr>
            <td>{{$cl->clothesName}}</td>
            <td>{{$cl ->clothesDecscription}}</td>
            <td>{{$cl->stock}}</td>
            <td>{{$cl->price}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection