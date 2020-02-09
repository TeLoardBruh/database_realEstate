<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('css/bootstrap_interface.css')}}" rel="stylesheet">
    <link href="{{asset('css/fonts_interface.css')}}" rel="stylesheet">
    <link href="{{asset('css/style_interface.css')}}" rel="stylesheet">
    <link href="{{asset('fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <title>Login page</title>
</head>

<body>
    @if (Route::has('login'))
    <div class="container">
        <div class="row d-flex justify-content-center">

            <!--Grid column-->
            <div class="col-md-6">

               
            </div>

        </div>
        <!--Grid column-->

    </div>
    <div class="d-flex justify-content-between bg-secondary mb-3">
    <div class="p-2 bg-info"></div>
    <div class="p-2 bg-warning"> @auth
                <a class="btn btn-info" href="{{ url('/home') }}">Home</a>
                @else
                <a class="btn btn-info" href="{{ url('/login/admin') }}">Login Admin</a>
                <a class="btn btn-info" href="{{ url('/login/agent') }}">Login Agent</a>
                @endauth</div>
    <div class="p-2 bg-primary"></div>
  </div>
    @endif
</body>

</html>