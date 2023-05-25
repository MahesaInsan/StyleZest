    @extends('layouts.userbox')
        
    @section('userbox-content')
        <div class="card-group">
            <div class="flex-row"></div>
                @foreach ($clothes as $cl)
                    <div class="col-sm-6 col-md-4">
                        <div class="card m-2">
                            <img class="card-img-top" style="height: 250px; object-fit:cover;" src="{{ asset('storage/images/clothes/'. $cl->image) }}" alt="clothes image {{$cl->id}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$cl->clothesName}}</h5>
                                <p class="card-text">Rp. {{$cl->price}}</p>
                                <a class="btn" href="/buyclothes/{{$cl->id}}">Buy</a>
                            </div>  
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection