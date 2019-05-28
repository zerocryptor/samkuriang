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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('asset_login/css/style.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">
</head>
<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="samkuriang-load"></div>
    </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <nav class="navbar navbar-expand-lg navbar-light py-0">
                <a class="navbar-brand pl-3 mb-3 pt-4" href="#"><img src="{{asset('img/logo.png')}}" alt="" class="logo"><strong>Samkuriang</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                </nav>
            </div>
            <div class="col-md-6">
            <nav id="topheader" class="navbar navbar-expand-lg navbar-light py-0">
                <div class="collapse navbar-collapse pr-4">
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
                        <a href="{{ route('login') }}" button class="btn btn-outline-success my-2 my-sm-0 btn-1" type="submit">Login
                            </button></a>
                    </form>
                       </div>
                    </nav>
                    

            </div>
        </div>
    </div>    
    
            
            
    <section id="home">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 pl-5 pt-4">
                    <h1 class="pt-5" style="color: #055A3D; font-weight: 400">Samkuriang</h1> 
                    <p class="pb-5">Samkuriang adalah aplikasi yang menghubungkan masyarakat dengan Bank Sampah. Keunggulan dari Samkuriang adalah dapat mendeteksi jenis sampah, informasi sampah dan cek lokasi bank Sampah </p>  
                    <p class="">Temukan Kami Di</p> 
                    <a href="#" target="_blank">
                        <img src="{{asset('img/playstore.png')}}" class="img-button img-fluid">
                    </a>
                </div>     

                <div class="col-md-6 pr-0 pl-3 pb-5 gambar-home">
                    <img class="img-fluid" src="{{asset('img/home2.png')}}" alt="thumbnail image" class="img-fluid">
                </div>
            </div>


        </div>
    </section>

<section id="fitur">
    <div class="container-fluid">
        <div class="row">
        <div class="col-xs-12 col-lg-12 text-center">
            <div class="padding-20"></div>
            <h3 style="font-size: 30px; font-weight : bold; color: #055A3D">Fitur Samkuriang.</h3>
            <div class="garis" style="margin:10px auto"></div>
        </div>
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
            <div class="fitur-text-left">
            <h3 style="font-size: 25px; margin-bottom: -4px; font-weight : bold; color: #055A3D">Scan</h3>
            <h3 style="font-size: 25px; font-weight : bold; color: #055A3D">sampah.</h3>
                <p class="lead">Anda dapat memilah jenis dan bentuk sampah dengan mudah dengan bantuan object detection pada aplikasi SAMKURIANG.</p>
            </div>
            </div>
            <div class="col-xs-12 col-md-6 padding-right-40">
                <img class="imgfitur-right" src="{{asset('img/scan2.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="imgfitur-left" src="{{asset('img/search.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
            <div class="fitur-text-right">
            <h3 style="font-size: 25px; margin-bottom: -4px; font-weight : bold; color: #055A3D">Search</h3>
            <h3 style="font-size: 25px; font-weight : bold; color: #055A3D">bank sampah.</h3>
                <p class="lead">Mencari bank sampah terdekat dengan lingkungan anda menjadi mudah dan menyenangkan menggunakan SAMKURIANG.</p>
            </div>
            </div>  
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
            <div class="fitur-text-left">
            <h3 style="font-size: 25px; margin-bottom: -4px; font-weight : bold; color: #055A3D">Navigasi ke</h3> 
            <h3 style="font-size: 25px; font-weight : bold; color: #055A3D">bank sampah.</h3>
                <p class="lead">Bertemu dengan bank sampah terdekat belum lengkap jika tidak adanya navigasi menuju ke tempat tujuan, di SAMKURIANG anda dapatkan itu secara gratis.</p>
            </div>
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="imgfitur-right" src="{{asset('img/navigate.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="imgfitur-left" src="{{asset('img/nabung.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
            <div class="fitur-text-right">
            <h3 style="font-size: 25px ; margin-bottom: -3px; font-weight : bold; color:#055A3D">Tabungan</h3>
            <h3 style="font-size: 25px; font-weight : bold;color:#055A3D">sampah.</h3>
                <p class="lead">Sama halnya dengan bank kovensional, bank sampah yang anda daftarkan pada SAMKURIANG dapat menyimpan duit hasil pertukaran sampah secara realtime dan anda dapat ambil itu kapan saja.</p>
            </div>
            </div>  
        </div>
    </div>
</section>
    <section id="mitra" class="bg-mitra">
            <div class="container"></div>
                <div class="row">
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

                <div class="faq-title text-center pb-3">
                    <h2>FAQ</h2>
                </div>
            </div>
            <div class="col-md-6 offset-md-3">
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
</body>
</html>
