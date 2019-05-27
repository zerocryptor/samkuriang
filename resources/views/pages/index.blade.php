@extends(layouts.app)
@section('content')

<section id="home">
        <div class="row">
            <div class="padding-60" style="margin-top: 200px; margin-left: 100px;">
                <h1 class="display-3" style="color: #055A3D; font-weight: 700">Samkuriang</h1> 
                <p class="lead">Samkuriang adalah aplikasi yang menghubungkan masyarakat dengan Bank Sampah.<br/>
                            Keunggulan dari Samkuriang adalah dapat mendeteksi jenis sampah, informasi sampah <br/>
                            dan cek lokasi bank Sampah </p>  
                <p class="lead">Temukan Kami Di</p>    
                <a href="#" target="_blank">
                    <img src="aset/playstore.png" class="img-button">    </a>
            </div>     

            <div class="col padding-0">
                <img class="img-fluid" src="aset/home.png" alt="thumnail image">
            </div>
         </div>
</section>

<section id="fitur">
    <div class="container">
        <div class="row" >
            <div class="col-xs-12 col-lg-12 text-center">
            <div class="padding-20"></div>
            <h3 style="font-size: 24px; font-weight : bold; color: #055A3D">Fitur Samkuriang.</h3>
            <div class="garis" style="margin:10px auto"></div>
        </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
            <h3 style="font-size: 20px; margin-bottom: -4px; font-weight : bold; color: #055A3D">Scan</h3>
            <h3 style="font-size: 20px; font-weight : bold; color: #055A3D">sampah.</h3>
                <p>Anda dapat memilah jenis dan bentuk sampah dengan mudah dengan bantuan object detection pada aplikasi SAMKURIANG.</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="imgfitur" src="{{asset('img/scan2.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="imgfitur" src="{{asset('img/search.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
            <h3 style="font-size: 20px; margin-bottom: -4px; font-weight : bold; color: #055A3D">Search</h3>
            <h3 style="font-size: 20px; font-weight : bold; color: #055A3D">bank sampah.</h3>
                <p>Mencari bank sampah terdekat dengan lingkungan anda menjadi mudah dan menyenangkan menggunakan SAMKURIANG.</p>
            </div>  
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
            <h3 style="font-size: 20px; margin-bottom: -4px; font-weight : bold; color: #055A3D">Navigasi ke</h3> 
            <h3 style="font-size: 20px; font-weight : bold; color: #055A3D">bank sampah.</h3>
                <p>Bertemu dengan bank sampah terdekat belum lengkap jika tidak adanya navigasi menuju ke tempat tujuan, di SAMKURIANG anda dapatkan itu secara gratis.</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="imgfitur" src="{{asset('img/navigate.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="imgfitur" src="{{asset('img/nabung.png')}}">
            </div>
            <div class="col-xs-12 col-md-6">
            <div class="padding-60"></div>
              <h3 style="font-size: 20px ; margin-bottom: -3px; font-weight : bold; color:#055A3D">Tabungan</h3>
              <h3 style="font-size: 20px; font-weight : bold;color:#055A3D">sampah.</h3>
                <p>Sama halnya dengan bank kovensional, bank sampah yang anda daftarkan pada SAMKURIANG dapat menyimpan duit hasil pertukaran sampah secara realtime dan anda dapat ambil itu kapan saja.</p>
            </div>  
        </div>
    </div>
</section>
@endsection

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
<!-- <section id="mitra" style="background-image: url(aset/bg.png)">
        <div class="container">
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
</section> -->
