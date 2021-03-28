<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from html.webqoda.com/coroso/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 01:53:03 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{URL::asset('assets/img/favicon/fav.ico')}}">
    <!-- Custom Fonts Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/user/vendor/custom_fonts/fonts.css')}}">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/user/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/user/vendor/fontawesome/css/all.min.css')}}">
    <!-- Elegant Icons Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/user/vendor/elegant/css/style.css')}}">
    <!-- Owl Carousel Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/user/vendor/owl_carousel/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/user/vendor/owl_carousel/css/owl.theme.default.css')}}">
    <!-- Custom Style Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/user/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/user/css/responsive.css')}}">
</head>

<body>
    <!-- Body Wrapper -->
    <div id="homepage-two" class="overflow-hidden">

        <!-- Header Section -->
        <header class="position-absolute">
            <div class="container">
                <div class="row">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a class="navbar-brand" href="{{route('landing')}}"><img src="{{URL::asset('assets/img/logo/logo.png')}}" alt="Logo" style="height: 75px;" /></a>
                    </div>
                    <div class="col-12 col-md-9 col-lg-8 d-flex justify-content-lg-center justify-content-end">
                        <nav class="navbar navbar-expand-md">
                            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#hamburgernavmenucontent" aria-controls="hamburgernavmenucontent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_toggle">
                                    <span class="hamburger">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </span>
                                    <span class="hamburger-cross">
                                        <span></span>
                                        <span></span>
                                    </span>
                                </span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-center" id="hamburgernavmenucontent">
                                <ul class="navbar-nav align-items-lg-center">

                                    <li class="nav-item"><a href="{{route('landing')}}">FORMULIR LAPORAN</a></li>
                                    <li class="nav-item"><a href="{{route('landing_cek')}}">CEK STATUS LAPORAN</a></li>

                                </ul>
                            </div>
                        </nav>
                    </div>
                    <div class="col-md-0 col-lg-2 d-flex align-items-center justify-content-end">
                        <a href="{{route('login')}}" class="btn ms-dark-btn d-none d-lg-block"><i class="fas fa-user"></i></a>
                    </div>
                </div>
            </div>
        </header>

        @yield('page')

        <footer id="footer-home-two">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-lg-6 text-white align-self-center">
                        <p class="seperator-line mb-2">DETAIL DARURAT</p>
                        <h2 class="font-weight-bold mb-4 mb-md-0">Bagaimana Kami Dapat Membantu?</h2>
                    </div>
                    <div class="col-md-7 col-lg-6">
                        <div class="contact-info">
                            <div class="row">
                                <div class="col-md-5">
                                    <p class="mb-2 ms-title-15">Kontak Telp/Fax</p>
                                    <h5 class="font-weight-bold mb-0"><a href="tel:+1234567890">(0234) 7140259</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ms-spacer-60"></div>

                <div class="row footer-bottom text-center">
                    <div class="col-md-12">
                        <p class="text-white">@ Copyright {{date('Y')}} All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- General Js -->
        <script src="{{URL::asset('assets/user/js/jquery-3.2.1.min.js')}}"></script>
        <!-- Bootstrap Js -->
        <script src="{{URL::asset('assets/user/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- Font Awesome Js -->
        <script src="{{URL::asset('assets/user/vendor/fontawesome/js/all.min.js')}}"></script>
        <!-- Elegant Icons Css -->
        <script src="{{URL::asset('assets/user/vendor/elegant/js/lte-ie7.js')}}"></script>
        <!-- Owl Carousel Js -->
        <script src="{{URL::asset('assets/user/vendor/owl_carousel/js/owl.carousel.min.js')}}"></script>
        <!-- Themes's Custom Js -->
        <script src="{{URL::asset('assets/user/js/theme.js')}}"></script>
        <!-- Swetalert -->
        <script src="{{URL::asset('assets/admin/js/sweetalert2/sweetalert2.all.min.js')}}"></script>
        <!-- Own Script -->
        <script src="{{URL::asset('assets/admin/js/ScriptSweetalert2.js')}}"></script>

        @stack('script')

    </div> <!-- Body Wrapper Ends -->

</body>

<!-- Mirrored from html.webqoda.com/coroso/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Mar 2021 01:53:37 GMT -->

</html>