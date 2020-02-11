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
    <style>
        body{
            background-image: url("{{asset('images/back_login.png')}}");
        }
    </style>
</head>

<body bgcolor="#E6E6FA">
@if (Route::has('login'))
<div class="flex-center position-ref full-height m-5">
        <div class="page m-5">
        <br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br>
            @auth
            <a class="btn btn-success" href="{{ url('/home') }}">Home</a>
            @else
            <a class="btn btn-success" href="{{ url('/login/admin') }}">Login-Admin</a>
            <a class="btn btn-success" href="{{ url('/login/agent') }}">Login-Agent</a>
            @endauth
        </div>
        @endif
        </div>
</div>
</body>

</html>