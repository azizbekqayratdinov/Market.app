<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <h1 class="text-center mt-5">Pay :</h1>
            <div class="mt-5">
                <form action="{{route('pay' , ['summa'=>$summa , 'user_id'=>$user_id])}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-8 mb-3">
                            <input type="hidden" name="user_id" value="{{$user_id}}">
                            <input type="text" class="form-control" name="card_number" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="1234 4567 7890 4565">
                        </div>
                        <div class="col-4 mb-3">
                            <input type="number" class="form-control" name="card_date" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="-- / --">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 mb-3">
                            <input type="text" class="form-control" name="summa" id="exampleInputEmail1"
                                aria-describedby="emailHelp" value="{{$summa}}" placeholder="Summa :">
                        </div>
                        <div class="col-12 mb-3">
                            <input type="submit" class="btn btn-warning form-control" value="Pay">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
