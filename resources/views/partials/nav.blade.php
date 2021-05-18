<nav class="navbar navbar-expand-lg navbar-dark bg-nav">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{route('home')}}">
            <img src="{{asset('images/logo.png')}}" alt="لوگو اینارو دارم" class="img-fluid logo">
            اینارو دارم، چی بپزم؟
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">
                        چی بپزم؟
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        دسته بندی ها
                    </a>
                    <ul class="dropdown-menu">
                        @foreach(['پلو','کباب','پیتزا و ساندویچ','خورشت','خوراک','کوکو و شامی','غذای دریایی','پاستا و ماکارونی','سوپ آش آبگوشت','غذای ملل','غذای محلی','غذای سنتی','غذای کودک','املت','پیش غذا','نان','کیک و شیرینی','غذای ارسالی کاربران','دیگر'] as $category)
                            <li><a class="dropdown-item" href="{{route('category',$category)}}">{{$category}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button"
                       data-bs-toggle="dropdown" aria-expanded="false">
                        وعده های غذایی
                    </a>
                    <ul class="dropdown-menu">
                        @foreach(['ناهار','شام','صبحانه','دسر','پیش غذا','عصرانه','میان وعده','افطاری'] as $meal)
                            <li><a class="dropdown-item" href="{{route('meal',$meal)}}">{{$meal}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <form action="/" class="d-flex">
                <input class="form-control me-2" type="search" placeholder="جستجو در نام غذا" name="name"
                       value="{{request('name')}}">
                <button class="btn btn-warning" type="submit">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                         class="bi bi-search" viewBox="0 0 16 16">
                        <path
                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</nav>
