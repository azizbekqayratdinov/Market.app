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
        <div class="row mt-5">
            <div class="col-3"></div>
            <div class="col-6">
                <h3 class="text-center mb-3">Registration</h3>
                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail111" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleInputEmail111"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail13" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="exampleInputEmail13"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-primary" value="Registration">
                    </div>
                </form>
                <div class="text-center">
                    <a href="{{route('login_page')}}"><button class="btn btn-warning btn-sm">LogIn</button></a>
                </div>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
