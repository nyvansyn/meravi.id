<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Meravi.id</title>
    <meta name="keywords" content="meravi.id, bumdes, kejarumkm, syncore, meravi">
    <meta name="author" content="Meravi.id">
    <meta name="description"
        content="Meravi.id merupakan layanan terintegrasi Training Center, Event Organizer dan Kemitraan untuk Community Management & Empowerment.">
    <meta http-equiv="refresh" content="60">
    @stack('seo')

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/assets/images/logo/favmeravi.svg') }}">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendors/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendors/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendors/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/vendors/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/fonts/bootstrap-icons/bootstrap-icons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/fonts/boxicons/boxicons.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/main.css') }}">

</head>

<body>

    <div class="page-wrapper">
        <!-- Preloader -->

        <!-- End Preloader -->
        @include('front.layouts.header')


        <main>
            @yield('containt')
        </main>

        @include('front.layouts.footer')

    </div>



    <!-- Scroll top -->
    <div class="btn-scroll-top">
        <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
            <path
                d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
        </svg>
    </div>

    <!-- Libs JS -->
    <script src="{{ asset('front/assets/js/vendors/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/aos.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/headhesive.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/smart-stick-nav.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/gsap.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/ScrollToPlugin.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/vendors/ScrollTrigger.min.js') }}"></script>

    <!-- Theme JS -->
    <script src="{{ asset('front/assets/js/gsap-custom.js') }}"></script>
    <script src="{{ asset('front/assets/js/main.js') }}"></script>
</body>



</html>
