<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">

        <ul class="nav col-12 justify-content-center mb-md-0">
            {{-- <li ><a href="{{route('home', [$user_id])}}" class="nav-link px-2 link-dark">Home</a></li> --}}
            @foreach ($ctgs as $v)
                <li>
                    <a href="/{{ $user_id }}/category-id/{{ $v->id }}"
                        class="nav-link px-2 link-dark">{{ $v->name }}</a>
                </li>
            @endforeach
            <li class="text-end">
                <a href="{{route('basket_page' , ['user_id'=>$user_id]) }}"
                    class="d-inline-flex justify-content-end link-body-emphasis text-decoration-none ms-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path
                            d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                </a>
            </li>
        </ul>

    </header>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-2">Home Page</h1>
            @foreach ($prdcs as $v)
                <div class="card m-5" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $v->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $v->price }}</h6>
                        <p class="card-text">
                        <div>
                            <form action="{{route('add_to_basket')}}" method="post">
                                @csrf
                                <div class="mb-1">
                                    <input type="number" class="form-control" name="quantity" id=""
                                        placeholder="How much?">
                                    <input type="hidden" value="{{ $v->id }}" name="product_id">
                                    <input type="hidden" value="{{ $v->name }}" name="product_name">
                                    <input type="hidden" value="{{ $v->price }}" name="price">
                                    <input type="hidden" value="{{ $user_id }}" name="user_id">
                                </div>
                                <div class="mb-1">
                                    <input type="submit" class="form-control btn btn-warning btn-sm"
                                        value="Send to basket">
                                </div>
                            </form>
                        </div>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
