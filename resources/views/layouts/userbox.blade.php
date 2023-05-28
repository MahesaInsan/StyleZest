@extends('layouts.app')

@section('content')
<div class="h-100 w-100 d-flex flex-column justify-content-center flex-grow-1 fs-5" style="padding-right: 12px; padding-left:12px">
    <div class="row" style="height:7.5%">
      <div class="col d-flex justify-content-center align-items-center border-end" style="font-size:1rem;">
        Filter By:
      </div>
      <div class="col-9 d-flex justify-content-center align-items-center" style="font-size:1.25rem;">
        @if (Route::is('home.filter'))
          Browsing In: <span class="fw-bold p-1">{{$name}}</span>
        @else
          Browsing In: <span class="fw-bold p-1">Home</span>
        @endif
      </div>
    </div>
    <div class="row" style="height:92.5%">
        <div class="col border-top border-end" style="padding:0px">
            <div class="accordion accordion-flush pt-1" id="accordionExample" style="background: white; font-size:1rem;"> 
                <div class="accordion-item">
                  <h2 class="accordion-header" id="collapseCategories">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-size:1.15rem;">
                      Categories
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" style="border-right-width: 2px">
                    <div class="accordion-body">
                        @foreach ($categories as $category)
                        <li class="list-unstyled ps-3 mb-1"><a
                          href="{{ route('home.filter', ['filter' => 'category', 'name_filter' => $category->categoryName]) }}"
                          class="text-decoration-none text-dark">{{ $category->categoryName }}</a></li>
                        @endforeach
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo" style="font-size:1.15rem;">
                      Gender
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" >
                    <div class="accordion-body">
                      @foreach ($genders as $gender)
                      <li class="list-unstyled ps-3 mb-1"><a
                        href="{{ route('home.filter', ['filter' => 'gender', 'name_filter' => $gender->genderName]) }}"
                        class="text-decoration-none text-dark">{{ $gender->genderName }}</a></li>
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree" style="font-size:1.15rem;">
                      Size
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree">
                    <div class="accordion-body">
                      @foreach ($sizes as $size)
                        <li class="list-unstyled ps-3 mb-1"><a 
                          href="{{ route('home.filter', ['filter' => 'sizes', 'name_filter' => $size->sizeCode]) }}" 
                          class="text-decoration-none text-dark">{{$size->sizeCode}}</a></li>
                      @endforeach
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-9 border-top" style="overflow-y:auto; max-height:100%">
            @yield('userbox-content')
        </div>
    </div>
</div>
@endsection
