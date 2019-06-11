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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />

    <!-- icon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Responsive -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
</head>
<body>
    <!-- page progress -->
    <div class="page-progress"></div>

    <!-- Preloader Start -->
    <div id="preloader">
        <div class="samkuriang-load"></div>
    </div>

    <section id="topheader">
        <nav class="navbar navbar-expand-lg py-0">
            <a class="navbar-brand pl-3 mb-3 pt-4" href="#">
                <img src="{{asset('img/logo.png')}}" alt="" class="logo img-fluid">
                <!-- <strong>Samkuriang</strong> -->
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <svg class="ham hamRotate ham8" viewBox="0 0 100 100" width="50" onclick="this.classList.toggle('active')">
                    <path class="line top" d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                    <path class="line middle" d="m 30,50 h 40" />
                    <path class="line bottom" d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                </svg>
            </button>
        
            <div class="collapse navbar-collapse pr-4" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto pr-3">
                    <li class="nav-item active pr-3">
                        <a class="nav-link" href="#"><strong>Beranda</strong><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#"><strong>Fitur</strong></a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#"><strong>Mitra</strong></a>
                    </li>
                    <li class="nav-item pr-3">
                        <a class="nav-link" href="#"><strong>FAQ</strong></a>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <a href="{{ url('login/garbage_officer') }}" class="btn btn-outline-success my-2 my-sm-0 py-2 btn-1">Login</a>
                </form>
            </div>
        </nav>
    </section>

    <section id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5 pt-6 px-5 leading-text">
                    <h1 class="pt-6 mt-5">Samkuriang</h1> 
                    <p class="pb-3 pt-2">Samkuriang adalah aplikasi yang menghubungkan masyarakat dengan Bank Sampah. Keunggulan dari Samkuriang adalah dapat mendeteksi jenis sampah, informasi sampah dan cek lokasi bank Sampah </p>  
                    
                    <div class="find-me pt-6">
                        <p class="mb-2">Temukan kami di:</p> 
                        <a href="#" target="_blank">
                            <img src="{{asset('img/playstore.png')}}" class="img-button pl-1">
                        </a>
                    </div>
                </div>     

                <div class="col-md-7 pr-0 py-3 gambar-home">
                    <img class="img-fluid pt-6 mt-4" src="{{asset('img/home2.png')}}" alt="thumbnail image">
                </div>
            </div>
        </div>
    </div>
</section>
    <section id="mitra" class="bg-mitra">
            <div class="container-fluid"></div>
                <div class="row mitracolor">
                        <div class="col-xs-12 col-lg-12 text-center">
                            <div class="padding-60"></div>
                            <h3 style="font-size: 24px; font-weight : bold; color: #fffefe">Mitra Samkuriang.</h3>
                            <div class="garis_hijau" style="margin:10px auto"></div>
                        </div>
                        <div class="col-xs-12 col-md-3 text-center">
                            <div class="padding-30"></div>
                            <p style="margin-bottom: -20px; color : #fffefe ">bank <p>
                            <p style="margin-bottom: -3px; color : #fffefe ">sampah</p>
                            <p style="color : #fffefe ">beji</p>
                        </div>
                        <div class="col-xs-12 col-md-3 text-center">
                            <div class="padding-30"></div>
                            <p style="margin-bottom: -20px; color : #fffefe ">bank <p>
                            <p style="margin-bottom: -3px; color : #fffefe ">sampah</p>
                            <p style="margin-bottom: -3px; color : #fffefe ">tanah</p>
                            <p style="color : #fffefe ">baru</p>
                            </div>
                        <div class="col-xs-12 col-md-3 text-center">
                            <div class="padding-30"></div>
                            <p style="margin-bottom: -3px; font-weight: bold; color : #f5e52e ">tps</p>
                            <p style="margin-bottom: -4px; font-weight: bold; color : #F5E52E ">universitas</p>
                            <p style=" font-weight: bold; color : #F5E52E">indonesia</p>
                            </div>
                        <div class="col-xs-12 col-md-3 text-center">
                            <div class="padding-30"></div>
                            <p style="margin-bottom: -3px;color : #fffefe ">bank</p>
                            <p style="margin-bottom: -4px;color : #fffefe ">sampah</p>
                            <p style="color : #fffefe ">cimanggis</p>
                            </div>
                </div>
    </section>
    <section id="faq-section">
        <div class="container">
          <div class="row">
            <!-- ***** FAQ Start ***** -->
            <div class="col-md-6 offset-md-3">

    <section id="fitur" class="mt-5">
        <div class="container-fluid mb-5">
            <div class="row">
                <div class="col-12 col-lg-12 text-center">
                    <h3 style="font-size: 35px; font-weight : 600; color: #055A3D">Fitur Samkuriang.</h3>
                    <div class="garis" style="margin:10px auto"></div>
                </div>
            </div>

            <div class="d-flex flex-row row my-6">
                <div class="col-12 col-md-6 px-5">
                    <img class="img-fluid" src="{{asset('img/scan2.png')}}">
                </div>
            
                <div class="col-12 col-md-6 py-6 mt-5 px-6">
                    <div class="text-fitur-style">
                        <h3>Scan sampah.</h3>
                        <p class="lead">Anda dapat memilah jenis dan bentuk sampah dengan mudah dengan bantuan object detection pada aplikasi SAMKURIANG.</p>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row row my-6">
                <div class="col-12 col-md-6 px-5 order-sm-0 order-lg-1">
                    <img class="img-fluid" src="{{asset('img/search.png')}}">
                </div>
            
                <div class="col-12 col-md-6 py-6 px-6 order-sm-1 order-lg-0">
                    <div class="text-fitur-style">
                        <h3>Search bank sampah.</h3>
                        <p class="lead">Anda dapat memilah jenis dan bentuk sampah dengan mudah dengan bantuan object detection pada aplikasi SAMKURIANG.</p>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row row my-6">
                <div class="col-12 col-md-6 px-5">
                    <img class="img-fluid" src="{{asset('img/navigate.png')}}">
                </div>
            
                <div class="col-12 col-md-6 py-6 px-6">
                    <div class="text-fitur-style">
                        <h3>Navigasi ke bank sampah.</h3>
                        <p class="lead">Anda dapat memilah jenis dan bentuk sampah dengan mudah dengan bantuan object detection pada aplikasi SAMKURIANG.</p>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row row my-6">
                <div class="col-12 col-md-6 px-5 order-sm-0 order-lg-1">
                    <img class="img-fluid" src="{{asset('img/nabung.png')}}">
                </div>
            
                <div class="col-12 col-md-6 py-6 px-6 order-sm-1 order-lg-0">
                    <div class="text-fitur-style">
                        <h3>Tabungan sampah.</h3>
                        <p class="lead">Anda dapat memilah jenis dan bentuk sampah dengan mudah dengan bantuan object detection pada aplikasi SAMKURIANG.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
    <!-- taro footer disini -->
<section id="footer">
    <div class="container-fluid bg">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <img src="{{asset('img/logo.png')}}" alt="" class="logo">
            </div>
            <div class="col-md-6 offset-md-3 text-white">
                <h2>Samkuriang</h2>
                <p class="konten pb-5">dengan nabung sampah,
                    <br>
                    ku riang!
                </p>
                <img src="{{asset('img/sosmed.png')}}" alt="">
                <p class="copyright">Copyright &copy; 2019 Samkuriang - All right reserved. A product of Bodo Amat</p>
                </div>
            </div>
        </div>
</section>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/page-progress.min.js') }}"></script>
    <script src="{{ asset('js/core.js') }}"></script>
</body>
</html>
