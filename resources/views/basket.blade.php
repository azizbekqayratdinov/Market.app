<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    {{-- <a href="{{route('home')}}" class="nav-link px-2 link-dark">Home</a> --}}
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Basket</h1>
            <table class="table table-hover table-bordered mt-5">
                <thead class="text-center">
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Kolichestvo</th>
                        <th scope="col">Obshaya summa</th>
                        {{-- <th scope="col">Status</th> --}}
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($baskets as $v)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $v->product_name }}</td>
                            <td>{{ $v->price }}</td>
                            <td>{{ $v->quantity }}</td>
                            <td>{{ $v->summa }}</td>
                            {{-- <td>{{ $v->status }}</td> --}}
                        </tr>
                        @php
                            $s += $v->summa;
                        @endphp
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="col-8">
                    <a href="{{route('pay_page' , ['summa'=>$s , 'user_id'=>$user_id])}}"><button class="btn btn-warning form-control">Pay</button></a>
                </div>
                <div class="col-4">
                    <input type="text" name="summa" value="Summa : {{ $s }}" disabled
                        class="form-control" id="">
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>
