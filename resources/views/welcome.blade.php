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
    </section> 

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

    <section id="mitra-samkuriang" class="mt-6 pt-7">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mt-6 text-center">
                    <h3 style="font-size: 35px; font-weight : 500; color: #fff">Mitra Samkuriang.</h3>
                    <div class="garis" style="margin:10px auto;"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row text-center text-white mt-5 pt-5">
                <div class="col-xl-3 col-md-3 mitra">
                    <img src="{{asset('img/bekasi.png')}}" alt="" class="" id="mitra-bank-sampah">
                    <h5 class="pt-4">Bank Sampah Beji</h5>
                </div>
                <div class="col-xl-3 col-md-3 mitra">
                    <img src="{{asset('img/bekasi.png')}}" alt="" id="mitra-bank-sampah">
                    <h5 class="pt-4">Bank Sampah Tanah Baru</h5>
                </div>
                <div class="col-xl-3 col-md-3 mitra">
                    <img src="{{asset('img/bekasi.png')}}" alt="" id="mitra-bank-sampah">
                    <h5 class="pt-4">Bank Sampah Universitas Indonesia</h5>
                </div>
                <div class="col-xl-3 col-md-3 mitra">
                    <img src="{{asset('img/bekasi.png')}}" alt="" id="mitra-bank-sampah">
                    <h5 class="pt-4">Bank Sampah Tanah Cipayung</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-8 mb-5">
                    <div class="row">
                        <div class="col-md-2 offset-md-3"></div>
                        <div class="col-md-10 offset-md-1">
                            <h3 class="faq-head">Frequently Asked <br> Question</h3>
                            <div class="garis" style="margin:10px 0 0 0 auto"></div>
                            <div class="faq" id="accordion">
                                <div class="card">
                                    <div class="card-header" id="faqHeading-1">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-1" data-aria-expanded="true" data-aria-controls="faqCollapse-1">
                                                <span class="badge">1</span>Apa itu Petugas Bank Sampah?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-1" class="collapse" aria-labelledby="faqHeading-1" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Petugas Bank Sampah adalah orang yang menjadi admin dimasing masing bank sampah yang dia tempati. Petugas Bank Sampah dapat mengubah total sampah yang disetorkan oleh nasabah dan total duit yang nasabah kumpulkan setiap menyetorkan sampahnya di bank sampah yang sudah ia daftarkan.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-2">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-2" data-aria-expanded="false" data-aria-controls="faqCollapse-2">
                                                <span class="badge">2</span>Apa itu Bank Sampah?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-2" class="collapse" aria-labelledby="faqHeading-2" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Bank Sampah adalah suatu tempat yang digunakan untuk mengumpulkan sampah yang sudah dipilah-pilah. Hasil dari pengumpulan sampah yang sudah dipilah akan disetorkan ke tempat pembuatan kerajinan sampah atau ke tempat pengepul sampah terdekat di daerahnya. Bank Sampah dikelola menggunakan sistem di web yang dilakukan oleh penjaga bank sampah dari masing-masing tempat.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-3">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-3" data-aria-expanded="false" data-aria-controls="faqCollapse-3">
                                                <span class="badge">3</span>Apa itu Nasabah?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-3" class="collapse" aria-labelledby="faqHeading-3" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Nasabah adalah orang yang sudah terdaftar menjadi anggota suatu bank sampah. Aktivitas nasabah baik penukaran sampah yang dilakukan maupun penyimpanan duit pada bank sampah tersebut akan selalu tercatat di setiap akun nasabah. Duit penyimpanan nasabah yang ada di Bank Sampah, bisa diambil kapanpun sesuka hati langsung dari Bank Sampahnya.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-4">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-4" data-aria-expanded="false" data-aria-controls="faqCollapse-4">
                                                <span class="badge">4</span>Bagaimana cara daftar sebagai Petugas Bank Sampah?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-4" class="collapse" aria-labelledby="faqHeading-4" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Anda dapat mendaftarkan sebagai Petugas Bank Sampah yang anda naungi melalui registrasi di web.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="faqHeading-6">
                                        <div class="mb-0">
                                            <h5 class="faq-title" data-toggle="collapse" data-target="#faqCollapse-6" data-aria-expanded="false" data-aria-controls="faqCollapse-6">
                                                <span class="badge">5</span>Bagaimana caranya menjadi Nasabah?
                                            </h5>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-6" class="collapse" aria-labelledby="faqHeading-6" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>Anda dapat mendaftarkan sebagai Nasabah sudah terdaftar pada suatu bank sampah melalui registrasidi aplikasi Samkuriang. Pengajuan pendaftaran pada suatu bank sampah terdapat di menu home aplikasi Samkuriang.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <img src="{{ asset('img/orang.png') }}" alt="" class="orang">
                </div>
            </div>
        </div>
    </section>

    <section id="footer" class="text-center text-white pt-5">
        <div class="container-fluid">
            <img src="{{ asset('img/logo.png') }}" alt="" class="logo">
            <h5 class="pt-2 mb-0">Samkuriang</h5>
            <div class="row">
                <div class="col-12">
                    <span class="mb-2">dengan nabung sampah <br> ku riang</span>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <img src="{{ asset('img/sosmed.png') }}" alt="" class="sosmed">
                </div>
            </div>
            <div class="row">
                <div class="col-12 pb-4">
                    <span>Copyright &copy; 2019 Samkuriang - All right reserved. A product of BodoAmat</span>
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
