<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Ranna | Home 1</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('themes/img/favicon.png')}}">
    <!-- Normalize Css -->
    <link rel="stylesheet" href="{{asset('themes/css/normalize.css')}}">
    <!-- Main Css -->
    <link rel="stylesheet" href="{{asset('themes/css/main.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{asset('themes/css/bootstrap.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('themes/css/animate.min.css')}}">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('themes/css/fontawesome-all.min.cs')}}s">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('themes/fonts/flaticon.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('themes/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('themes/css/owl.theme.default.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('themes/style.css')}}">
    <!-- Modernizr Js -->
    <script src="{{asset('themes/js/modernizr-3.6.0.min.js')}}"></script>
</head>
<body>
<!-- Add your site or application content here -->
<!-- Preloader Start Here -->
{{--<div id="preloader"></div>--}}
<!-- Preloader End Here -->
<!-- ScrollUp Start Here -->
<a href="#wrapper" data-type="section-switch" class="scrollup">
    <i class="fas fa-angle-double-up"></i>
</a>

<div id="wrapper" class="wrapper">
    @yield('header')

    @yield('slider')

    @yield('content')

    @yield('footer')
</div>

<!-- Search Box Start Here -->
<div id="search" class="search-wrap">
    <button type="button" class="close">×</button>
    <form class="search-form">
        <input type="search" id="ooooo" value="" placeholder="Type here........" />
        <button type="submit" class="search-btn"><i class="flaticon-search"></i></button>
    </form>
</div>
<!-- Search Box End Here -->
<!-- Modal Start  With LOG IN-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <div class="title-default-bold mb-none">Login</div>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form class="login-form">
                    <input class="main-input-box" type="Email" placeholder="Email" />
                    <input class="main-input-box" type="password" placeholder="Password" />
                    <div class="inline-box mb-5 mt-4">
                        <div class="checkbox checkbox-primary">
                            <input id="modal-checkbox" type="checkbox">
                            <label for="modal-checkbox">Remember Me</label>
                        </div>
                        <label class="lost-password"><a href="#">Lost your password?</a></label>
                    </div>
                    <div class="inline-box mb-5 mt-4">
                        <button class="btn-fill" type="submit" value="Login">Login</button>
                        <a href="resources/views/register.blade.php"btn-register"><i class="fas fa-user"></i>Register Here!</a>
                    </div>
                </form>
                <label>Login connect with your Social Network</label>
                <div class="login-box-social">
                    <ul>
                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal End-->
<!-- Jquery Js -->
<script src="{{asset('themes/js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('themes/js/popper.min.js')}}"></script>
<!-- Bootstrap Js -->
<script src="{{asset('themes/js/bootstrap.min.js')}}"></script>
<!-- Plugins Js -->
<script src="{{asset('themes/js/plugins.js')}}"></script>
<!-- Owl Carousel Js -->
<script src="{{asset('themes/js/owl.carousel.min.js')}}"></script>
<!-- Smoothscroll Js -->
<script src="{{asset('themes/js/smoothscroll.min.js')}}"></script>
<!-- Custom Js -->
<script src="{{asset('themes/js/main.js')}}"></script>
</body>
</html>
