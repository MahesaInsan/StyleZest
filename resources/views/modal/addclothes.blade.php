<form action="/modal/addclothes" method="post" enctype="multipart/form-data">
    {{ method_field('patch') }}
    {{ csrf_field() }}
    <div class="modal fade text-left" id="ModalAddClothes" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{ __('Add New Clothes') }}</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>        
                <div class="modal-body d-flex flex-column gap-4">
                    <div id="image">
                        <p class=" mb-2">Image:</p>
                        <input class="form-control" type="file" name="inImg" id="" class="form-control">
                    </div>
                    <div id="name">
                        <p class=" mb-2">Clothes Name:</p>
                        <input type="text" name="inName" id="" class="form-control">
                    </div>
                    <div id="description">
                        <p class=" mb-2">Description:</p>
                        <input type="text" name="inDesc" id="" class="form-control">
                    </div>
                    <div id="gender">
                        <p class=" mb-2">Gender:</p>
                        <select class="form-select" aria-label="Default select example" name="inGender">
                            @foreach ($genders as $gender)
                                <option value={{$gender->id}}>{{$gender->genderName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div id="categories">
                        <p class=" mb-2">Category:</p>
                        <select class="form-select" aria-label="Default select example" name="inCategories">
                            @foreach ($categories as $category)
                                <option value={{$category->id}}>
                                    {{$category->categoryName}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div id="color">
                        <p class=" mb-2">Color:</p>
                        <div class="form-control" style="height:5rem; overflow-y:scroll" name="inColor[]">
                            @foreach ($colors as $color)
                                <input class="form-check-input" type="checkbox" value="{{$color->id}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    <div style="width:0.5rem; height:0.5rem; background-color:{{$color->colorcode}}"></div>
                                    {{$color->colorname}}
                                </label>
                                <br>
                            @endforeach
                        </div>
                    </div>
                    <div id="size">
                        <p class=" mb-2">Size:</p>
                        <div class="form-control" style="height:5rem; overflow-y:scroll" name="inSize[]">
                            @foreach ($sizes as $size)
                                <input class="form-check-input" type="checkbox" value="{{$size->id}}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    {{$size->sizeCode}} - {{$size->sizeDesc}}
                                </label>
                                <br>
                            @endforeach
                        </div>
                    </div>
                    <input type="submit" class="button" value="Add Clothes">
                </div>
            </div>
        </div>
    </div>
</form>