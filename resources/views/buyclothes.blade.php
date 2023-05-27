@extends('layouts.app')
        
@section('content')
@csrf
    <div class="row p-4 h-100">
        <div class="col h-100">
            <div class="h-75">
                    <img src="{{ asset('storage/images/clothes/'. $clothes->image) }}" class="h-100 w-100" style="object-fit:cover">
                </div>
                <h5 class="fw-bold mt-4" style="font-size: 1.25rem">{{$clothes->clothesName}}</h5>
                <p style="font-size: 1rem">{{$clothes->clothesDescription}}</p>
        </div>

        <form action="/buyclothes/{{$clothes->id}}" method="post" enctype="multipart/form-data" class="col h-100">
            @csrf
            <div class="d-flex flex-column justify-content-between h-100">
                <div class="d-flex flex-column justify-content-between h-75">
                    <p style="font-size: 1.25rem">Gender: {{$gender->genderName}}</p>
                    <div>
                        <p class="m-0" style="font-size: 1.25rem">Color:</p>
                        <div class="d-flex flex-row gap-3">
                            @foreach ($clothes->colors as $color)
                                <input class="form-check-input" type="radio" name="inColor" value="{{$color->id}}" style="width:3rem; height:3rem; background-color:{{$color->colorcode}};">
                            @endforeach
                        </div>
                    </div>

                    <div> 
                        <p class="m-0" style="font-size: 1.25rem">Size:</p>
                        <div class="btn-group d-flex flex-row gap-2" style="font-size: 1.25rem">
                            @foreach ($clothes->sizes as $size)
                                <label class="btn btn-primary">
                                    <input class="" type="radio" id="{{$size->sizeCode}}" name="inSize" value="{{$size->id}}"> {{$size->sizeCode}}
                                </label>
                            @endforeach
                        </div>
                    </div>

                    <div> 
                        <p class="m-0" style="font-size: 1.25rem">Amount:</p>
                        <select class="form-select" aria-label="Default select example" name="inAmount" style="font-size: 1.25rem">
                            @for ($i = 1; $i <= 5; $i++)
                                <option value={{$i}}>
                                    {{$i}}
                                </option>
                            @endfor
                        </select>
                    </div>

                    <h5 class="fw-bold" style="font-size: 1.25rem">Rp. {{$clothes->price}}</h5>
                </div>

                <input type="submit" class="button" value="Add to Cart">
            </div>
        </form>
    </div>
@endsection