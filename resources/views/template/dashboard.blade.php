<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JawEar</title>
    <link rel="shortcut icon" href="{{asset('favicon/android-icon-144x144.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">JawEar</a>
            <ul class="navbar-nav ml-auto col-9">
                <li class="nav-item">
                    <a class="nav-link" href="#">Classroom</a>
                </li>
                <li class="nav-item">
                </li>
            </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">{{auth()->user()->username}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


@yield('content')

<footer>
    <div class="container">
        <div class="text-center py-4 text-muted">
            Copyright &copy; 2023 - Web Tech ID
        </div>
    </div>
</footer>
<script  src="{{asset('js/app.js')}}"></script>

</body>
</html>
