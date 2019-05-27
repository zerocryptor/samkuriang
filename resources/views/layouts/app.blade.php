<!DOCTYPE html>
<html lang="{{app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Samkuriang | A fine glass vase goes from treasure to trash, the moment it is broken.</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="samkuriang-load"></div>
    </div>
    
    <nav id="topheader" class="navbar navbar-expand-lg navbar-light bg-light pt-3">
        <a class="navbar-brand pl-3 mb-3 pt-4" href="#"><img src="{{asset('img/logo.png')}}" alt="" class="logo"><strong>Samkuriang</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse pr-4" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto pr-3">
                <li class="nav-item active pr-3">
                    <a class="nav-link" href="#">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link" href="#">Fitur</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link" href="#">Mitra</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0 btn-1" type="submit">Masuk</button>
            </form>
        </div>
    </nav>
    @yield('content')

    <!-- taro footer disini -->

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
