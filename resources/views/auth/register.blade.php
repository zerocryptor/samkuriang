<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Samkuriang | Daftar petugas bank sampah</title>

    <!-- TOKEN -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom-signup-style.css') }}" rel="stylesheet">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-4.0.0/dist/css/bootstrap.min.css') }}">
    <style>
    /* Always set the map height explicitly to define the size of the div
    * element that contains the map. */
    #map {
        width: 100%;
        height: 400px;
        margin-top: 10px;
    }
    </style>
</head>
<body>
<section id="regis-form" class="py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 offset-2 py-3 px-5">
                <div class="sign-up-title text-center">
                    <img src="{{ asset('img/navigate.png') }}" class="img-fluid" alt="img-regis">
                    <h2>Daftarkan bank sampah anda segera!</h2>
                    <div class="garis" style="margin:10px auto"></div>
                </div>
                <div class="main-form">
                    <form action="{{ route('register') }}" method="post">
                    @csrf
                        <div class="form-group{{ $errors->has('namatempat') ? ' has-error' : '' }}">
                            <label for="namatempat">Nama bank sampah</label>
                            <input type="text" class="form-control" id="namatempat" name="namatempat" placeholder="Masukan nama tempat bank sampah anda"value="{{ old('namatempat') }}" >
                            @if ($errors->has('namatempat'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('namatempat') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('namapetugas') ? ' has-error' : '' }}">
                            <label for="namapetugas">Nama petugas</label>
                            <input type="text" class="form-control" id="namapetugas" name="namapetugas" placeholder="Masukan nama petugas bank sampah anda" value="{{ old('namapetugas') }}">
                            @if ($errors->has('namapetugas'))
                            <span class="badge badge-danger">{{$errors->first('namapetugas')}}</span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan email anda, Cth: johndoe@gmail.com" value="{{ old('email') }}">
                            <small id="emailHelp" class="form-text text-muted">Pastikan email yang anda masukan adalah email aktif.</small>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <label for="phone_number">Nomor Telepon</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Masukan nomor telepon anda" value="{{ old('phone_number') }}">
                            <small id="phoneHelp" class="form-text text-muted">Pastikan nomor telepon yang anda masukan adalah nomer telepon aktif.</small>
                            @if ($errors->has('phone_number'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone_number') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password">Kata sandi</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukan password anda" value="{{ old('password') }}">
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password_confirmation">Verifikasi Kata sandi</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Masukan password lagi"value="{{ old('password_confirmation') }}">
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-group{{ $errors->has('position') ? ' has-error' : '' }}">
                            <label for="position">Lokasi</label>
                            <input type="text" class="form-control" name="position" id="position" placeholder="Masukan alamat lengkap anda" value="{{ old('position') }}">
                            <small id="lokasiHelp" class="form-text text-muted">Pastikan titik kordinat berada dilokasi yang tepat.</small>
                            @if ($errors->has('position'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('position') }}</strong>
                                </span>
                            @endif
                            <div id="map"></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label for="latitude">Latitude</label>
                                    <input type="text" class="form-control" id="latitude" name="latitude" readonly required>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label for="longitude">Longitude</label>
                                    <input type="text" class="form-control" id="longitude" name="longitude" readonly required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-outline-success my-2 my-sm-0 py-2 btn-1 col-12">Daftar</button>
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
            center: {lat: -6.362173, lng: 106.826393},
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        });
        
        var input = document.getElementById('position');
        var searchBox = new google.maps.places.SearchBox(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
            searchBox.setBounds(map.getBounds());
        });
        
        var markers = [];
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
            var places = searchBox.getPlaces();

            if (places.length == 0) {
                return;
            }

            // Clear out the old markers.
            markers.forEach(function(marker) {
                marker.setMap(null);
            });
            markers = [];

          // For each place, get the icon, name and location.
            var bounds = new google.maps.LatLngBounds();
            places.forEach(function(place) {
            if (!place.geometry) {
                console.log("Returned place contains no geometry");
                return;
            }

            document.getElementById('latitude').value = place.geometry.location.lat();
            document.getElementById('longitude').value = place.geometry.location.lng();

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
                map: map,
                title: place.name,
                position: place.geometry.location
            }));

            map.addListener('click', function(e) {
                animatedMove(markers[0], .5, markers[0].position, e.latLng);
            });

            if (place.geometry.viewport) {
                // Only geocodes have viewport.
                bounds.union(place.geometry.viewport);
            } else {
                bounds.extend(place.geometry.location);
            }
            });
            map.fitBounds(bounds);
        });

        var infowindow = new google.maps.InfoWindow();

        // // Try HTML5 geolocation.
        // if (navigator.geolocation) {
        //     navigator.geolocation.getCurrentPosition(function(position) {
        //     var pos = {
        //         lat: position.coords.latitude,
        //         lng: position.coords.longitude
        //     };

        //     infowindow.setPosition(pos);
        //     infowindow.setContent('Location found.');
        //     infowindow.open(map);
        //     map.setCenter(pos);
        //     }, function() {
        //         handleLocationError(true, infowindow, map.getCenter());
        //     });
        // } else {
        //   // Browser doesn't support Geolocation
        //   handleLocationError(false, infowindow, map.getCenter());
        // }

        // function handleLocationError(browserHasGeolocation, infowindow, pos) {
        //     infowindow.setPosition(pos);
        //     infowindow.setContent(browserHasGeolocation ?
        //                         'Error: The Geolocation service failed.' :
        //                         'Error: Your browser doesn\'t support geolocation.');
        //                         infowindow.open(map);
        // }
    }

    // google.maps.event.addDomListener(window, 'load', initMap);

    function animatedMove(marker, t, current, moveto) {
        var lat = current.lat();
        var lng = current.lng();

        var deltalat = (moveto.lat() - current.lat()) / 100;
        var deltalng = (moveto.lng() - current.lng()) / 100;

        document.getElementById('latitude').value = moveto.lat();
        document.getElementById('longitude').value = moveto.lng();

        var delay = 10 * t;
        for (var i = 0; i < 100; i++) {
            (function(ind) {
            setTimeout(
                function() {
                var lat = marker.position.lat();
                var lng = marker.position.lng();
                lat += deltalat;
                lng += deltalng;
                latlng = new google.maps.LatLng(lat, lng);
                marker.setPosition(latlng);
                }, delay * ind
            );
            })(i)
        }
    }

    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/igorescobar/jQuery-Mask-Plugin/1ef022ab/dist/jquery.mask.min.js"></script>
    <script>
         $( '#phone_number' ).mask('+62000−0000−0000');
    </script>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- gmaps -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGu6Jec5gdAvaD08eYVduRSQGOZteYL8w&libraries=places&callback=initMap" async defer></script>
</body>
</html>