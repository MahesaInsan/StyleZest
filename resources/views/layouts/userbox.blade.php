@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-4">
        <div class="col">
            {{-- <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </button>
                <ul class="dropdown-menu">
                    @foreach ($categories as $category)
                    <li><a class="dropdown-item" href="#">{{$category->categoryName}}</a></li>
                    @endforeach
                </ul>
            </div> --}}
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="collapseCategories">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Categories
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        @foreach ($categories as $category)
                        <li><a href="#">{{$category->categoryName}}</a></li>
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
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      @foreach ($genders as $gender)
                        <li><a href="#">{{$gender->genderName}}</a></li>
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
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      @foreach ($sizes as $size)
                        <li><a href="#">{{$size->sizeCode}}</a></li>
                      @endforeach
                    </div>
                  </div>
                </div>
            </div>
        </div>
        <div class="col-9 overflow-auto mh-100">
            @yield('userbox-content')
        </div>
    </div>
</div>
@endsection