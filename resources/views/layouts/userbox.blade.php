@extends('layouts.app')

@section('content')
<div class="h-100 w-100 d-flex flex-column justify-content-center flex-grow-1 fs-5" style="padding-right: 12px; padding-left:12px">
    <div class="row" style="height:7.5%">
      <div class="col d-flex justify-content-center align-items-center border-end">
        Sort By:
      </div>
      <div class="col-9 d-flex justify-content-center align-items-center">
        Browsing In: 
      </div>
    </div>
    <div class="row" style="height:92.5%">
        <div class="col border-top border-end" style="padding:0px">
            <div class="accordion accordion-flush pt-1 fs-6" id="accordionExample" style="background: white">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="collapseCategories">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Categories
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" >
                    <div class="accordion-body">
                        @foreach ($categories as $category)
                        <li class="list-unstyled ps-3"><a href="#" class="text-decoration-none">{{$category->categoryName}}</a></li>
                        @endforeach
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Gender
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" >
                    <div class="accordion-body">
                      @foreach ($genders as $gender)
                        <li class="list-unstyled ps-3"><a href="#" class="text-decoration-none">{{$gender->genderName}}</a></li>
                      @endforeach
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Size
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree">
                    <div class="accordion-body">
                      @foreach ($sizes as $size)
                        <li class="list-unstyled ps-3"><a href="#" class="text-decoration-none">{{$size->sizeCode}}</a></li>
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