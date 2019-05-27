<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .logo {height: 70px; width: 70px;}
        .navbar-light{
            background-color: #e8f8eb;
        }

        .navbar-brand{
            color: #055a3d;
        }

        #topheader .navbar-nav li > a {
            text-transform: capitalize;
            color: #333;
            transition: color .2s;
        }
        #topheader .navbar-nav li > a:hover, #topheader .navbar-nav li > a:focus {
            color: #31a05e;
        }
        #topheader .navbar-nav li.active > a {
            color: #31a05e;
        }

        .btn {
            width: 110px;
            text-align: center;
            transition: 0.7s;
            background-size: 180% auto;
            color: white;
            box-shadow: 0 0 20px #eee;
            border-radius: 40px;
        }
        .btn:hover {
            background-position: right center;
            color: white;
        }
        .btn-1 {
            background-image: linear-gradient(to right, #055a3d 0%, #002031 51%, #055a3d 100%);
        }
    </style>
</head>
<body>
    <nav id="topheader" class="navbar navbar-expand-lg navbar-light bg-light pt-3">
        <a class="navbar-brand pl-3 mb-3 pt-4" href="#"><img src="../../public/asset/logo.png" alt="" class="logo"><strong>Samkuriang</strong></a>
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
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>