@extends('layouts.app')
        
@section('content')
@csrf
    <div class="row p-4">
        <div class="col">
            <img src="" alt="">
            <h5>{{$clothes->clothesName}}</h5>
            <p>{{$clothes->clothesDescription}}</p>
        </div>
        <div class="col">
            <div class="d-flex flex-column">
                <p>Gender: {{$gender->genderName}}</p>

                <p class="m-0">Color:</p>
                <div class="d-flex flex-row">
                    @foreach ($clothes->colors as $color)
                        <input class="form-check-input" type="radio" name="inColor" value="{{$color->id}}" style="width:2rem; height:2rem; background-color:{{$color->colorcode}}">
                    @endforeach
                </div>

                <p class="m-0">Size:</p>
                <div class="d-flex flex-row">
                    @foreach ($clothes->sizes as $size)
                        {{-- <div class="d-flex align-items-center justify-content-center border border-light" style="background-color:white; width:2rem; height:2rem;">{{$size->sizeCode}}</div> --}}
                        <input id="selectSize" class="form-check-input d-flex align-items-center justify-content-center border border-light" type="radio" name="inSize" value="{{$size->id}}" style="width:2rem; height:2rem; background-color:white">
                        <label class="btn btn-outline-primary" for="select-Size">{{$size->sizeCode}}</label>
                    @endforeach
                </div>

                <h6>Rp. {{$clothes->price}}</h6>
                <button>Add to Cart</button>
            </div>
        </div>
    </div>
@endsection