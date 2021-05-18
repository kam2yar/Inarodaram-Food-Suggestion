<div class="row">
    @foreach($foods as $food)
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('view',$food->id)}}">
                                <div class="food-image-small"
                                     style="background-image: url('/images/foods/{{$food->id}}.jpg')"></div>
                            </a>
                        </div>
                        <div class="col-md-8">
                            <a href="{{route('view',$food->id)}}" class="text-decoration-none text-dark">
                                <h3 class="font-weight-bolder fw-bold font-20 pt-3 pt-md-0">{{$food->name}}</h3>
                            </a>
                            <div class="mt-4">
                                <span class="text-danger fw-bold">دسته بندی:</span>
                                @foreach($food->categories as $index => $category)
                                    <a href="{{route('category',$category)}}"
                                       class="text-decoration-none text-body">{{$category}}</a>
                                    @if($index < count($food->categories) - 1)
                                        ,
                                    @endif
                                @endforeach
                            </div>

                            <div class="mt-1">
                                <span class="text-danger fw-bold">مناسب برای وعده:</span>
                                @foreach($food->meals as $index => $meal)
                                    <a href="{{route('category',$meal)}}"
                                       class="text-decoration-none text-body">{{$meal}}</a>
                                    @if($index < count($food->meals) - 1)
                                        ,
                                    @endif
                                @endforeach
                            </div>

                            <div class="mt-1">
                                <span class="text-danger fw-bold">مواد مورد نیاز:</span>
                                @foreach($food->requirements as $index => $requirement)
                                    <span>{{$requirement}}</span>
                                    @if($index < count($food->requirements) - 1)
                                        ,
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>