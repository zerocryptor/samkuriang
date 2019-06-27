<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in | Samkuriang</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('asset_login/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('asset_login/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <style>
        .main {
            padding: 40px 0px !important;
        }
    </style>
</head>
<body>

    <div class="main">

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                    @isset($url)
                        <figure><img src="{{ asset('asset_login/images/signin-image.jpg') }}" alt="sing up image"></figure>
                        @else
                        <figure><img src="{{ asset('asset_login/images/signin-image.jpg') }}" alt="sing up image"></figure>
                    @endisset
                        
                    </div>

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                    @isset($url)
                        <form method="POST" action='{{ url("login/$url") }}' aria-label="{{ __('Login') }}" class="register-form" id="login-form">
                        @else
                        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="register-form" id="login-form">
                    @endisset
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div>
                            <div class="form-group form-button">
                            <button class="btn btn-outline-success my-2 my-sm-0 btn-1 sign-in-btn" type="submit">Login</button>
                            </div>
                            <div class="text-center p-t-136">
                            @isset($url)
                                <a class="txt2" href="{{ route('register') }}">
                                Create your Account
                                <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            @else
                            @endisset
						    
				        	</div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="{{ asset('asset_login/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('asset_login/js/main.js') }}"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>