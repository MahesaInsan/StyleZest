@extends('layouts.app')
        
@section('content')
@csrf
    {{-- <div class="row p-4 h-100"> --}}
        <div class="row p-4 pb-0 h-100">
            @csrf
            <div class="col-9" style="overflow-y:auto; max-height:100%">
                @foreach ($transactionHC as $thc)
                    <div class="row p-2 border border-2 m-3 mt-0" style="height:25%">
                        <div class="col-3 h-100">
                            <img src="{{ asset('storage/images/clothes/'. $thc->clothes->image) }}" alt="" style="height:100%; width:100%; object-fit:cover">
                        </div>
                        <div class="col-6 p-2 d-flex flex-column justify-content-evenly">
                            <div class="row">
                                <p class="m-0" style="font-size: 1.5rem">{{$thc->clothes->clothesName}}</p>
                            </div>
                            <div class="row d-flex align-items-center" style="font-size: 1.1rem">
                                <div class="col-4">
                                    Color: {{$thc->color->colorname}}
                                </div>
                                <div class="col-8">
                                    Size: {{$thc->size->sizeCode}}
                                </div>
                            </div>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-evenly">
                            <div class="row">
                                <div class="col fw-bold" style="font-size: 1.25rem"> 
                                    {{$thc->clothes->price}} IDR
                                </div>
                            </div>
                            <div class="row d-flex align-items-center" style="font-size: 1.1rem">
                                <div class="col-6">
                                    Quantity: {{$thc->count}}
                                </div>
                                <div class="col-6">
                                    <form action="/deletetransaction/{{$thc->id}}"method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">Remove</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col mb-4 d-flex flex-column justify-content-between">
                <div class="border border-2 w-100 p-3 h-100 mb-4 d-flex flex-column justify-content-between">
                    <div class="">
                        @foreach ($transactionHC as $thc)
                            <div class="row mb-2">
                                <div class="col-6" style="font-size: 1rem">
                                    {{$thc->clothes->clothesName}} x {{$thc->count}}
                                </div>
                                <div class="col-5 offset-1 d-flex justify-content-end" style="font-size: 1.1rem">
                                    Rp. {{$thc->totPrice}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-6 fw-bold" style="font-size: 1.15rem">
                                Total Price: 
                            </div>
                            <div class="col-6 fw-bold text-end" style="font-size: 1.15rem">
                                Rp. {{$transactionD->totPrice}}
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn text-white" style="font-size: 1.25rem; background-color: {{$custom->buttoncolor}}">Continue to Payment</button>
            </div>
        </div>
    {{-- </div> --}}
@endsection