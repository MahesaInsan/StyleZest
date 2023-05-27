@extends('layouts.app')
        
@section('content')
@csrf
    <div class="row p-4 h-100">
        <div class="col-md-7 col-sm-12 h-100">
            <div class="h-100">
                <img src="{{ asset('storage/images/clothes/'. $clothes->image) }}" class="h-100 w-100" style="object-fit:cover">
            </div>
        </div>
        <form action="/buyclothes/{{$clothes->id}}" method="post" enctype="multipart/form-data" class="col h-100" style="overflow-y:auto; max-height:100%">
            @csrf
            <div class="d-flex flex-column justify-content-between h-100">
                <p class="fw-bold mb-0" style="font-size: 3rem;">{{$clothes->clothesName}}</p>
                <p class="fw-bold text-start" style="font-size: 1.25rem">Rp. {{$clothes->price}}</p>
                <p style="font-size: 1.25rem">{{$clothes->clothesDescription}}</p>
                <hr>
                
                <div class="d-flex flex-column justify-content-between h-75">
                    <div class="div d-flex flex-column justify-content-between" style="height:65%">
                        <p style="font-size: 1.25rem; margin-bottom:0;">Gender: <span style="font-size:1.1rem">{{$gender->genderName}}</span></p>
                        <div>
                            <p class="m-0" style="font-size: 1.25rem">Color:</p>
                            <div class="d-flex flex-row gap-3">
                                @foreach ($clothes->colors as $color)
                                    <input class="form-check-input" type="radio" name="inColor" value="{{$color->id}}" style="width:3rem; height:3rem; background-color:{{$color->colorcode}};">
                                @endforeach
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6"> 
                                <p class="m-0 mb-2" style="font-size: 1.25rem">Size:</p>
                                <select class="form-select" aria-label="Default select example" name="inSize" style="font-size: 1rem">
                                    @foreach ($clothes->sizes as $size)
                                        <option value={{$size->id}}>
                                            {{$size->sizeCode}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="col"> 
                                <p class="m-0 mb-2" style="font-size: 1.25rem">Amount:</p>
                                <select class="form-select" aria-label="Default select example" name="inAmount" style="font-size: 1rem">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <option value={{$i}}>
                                            {{$i}}
                                        </option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="button justify-items-end" value="Add to Cart">
                </div>
                
            </div>
        </form>
    </div>
@endsection