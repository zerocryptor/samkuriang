<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samkuriang | Daftar petugas bank sampah</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-signup-style.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">
</head>
<body>
<section id="regis-form" class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2 py-3 px-5">
                <div class="sign-up-title text-center">
                    <img src="{{ asset('img/navigate.png') }}" alt="img-regis">
                    <h2>Sign up for best experience!!</h2>
                    <div class="garis" style="margin:10px auto"></div>
                </div>

                <div class="main-form">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukan email anda, Cth: johndoe@gmail.com">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="namatempat">Nama bank sampah</label>
                            <input type="namatempat" class="form-control" id="name" aria-describedby="namatempatHelp" placeholder="Masukan nama tempat bank sampah anda">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- gmaps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGu6Jec5gdAvaD08eYVduRSQGOZteYL8w&callback=initMap" async defer></script>
</body>
</html>