@extends('layouts.app')
        
@section('content')
@csrf
    {{-- <div class="row p-4 h-100"> --}}
        <form class="row p-4 pb-0 h-100" action="/transaction" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-9" style="overflow-y:auto; max-height:100%">
                @foreach ($transactionHC as $thc)
                    <div class="row p-2 border border-2 m-3 mt-0" style="height:25%">
                        <div class="col-3 h-100">
                            <img src="{{ asset('storage/images/clothes/'. $thc->clothes->image) }}" alt="" style="height:100%; width:100%; object-fit:cover">
                        </div>
                        <div class="col-6 p-2 d-flex flex-column justify-content-evenly">
                            <div class="row">
                                <h4>{{$thc->clothes->clothesName}}</h4>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    Color: {{$thc->color->colorname}}
                                </div>
                                <div class="col-6">
                                    Size: {{$thc->size->sizeCode}}
                                </div>
                            </div>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-evenly">
                            <div class="row">
                                <div class="col">
                                    Rp. {{$thc->clothes->price}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    Delete
                                </div>
                                <div class="col-6">
                                    {{$thc->count}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col mb-4 border border-3 p-3 pe-1 d-flex flex-column justify-content-between">
                <div>
                    @foreach ($transactionHC as $thc)
                        <div class="row mb-2">
                            <div class="col-6">
                                {{$thc->clothes->clothesName}}
                            </div>
                            <div class="col-5 offset-1">
                                Rp. {{$thc->totPrice}}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div>
                    <div class="row">
                        <div class="col-6">
                            Total Price: 
                        </div>
                        <div class="col-5 offset-1">
                            Rp. {{$transactionD->totPrice}}
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {{-- </div> --}}
@endsection