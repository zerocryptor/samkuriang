@extends(layouts.app)
@section('content')


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
