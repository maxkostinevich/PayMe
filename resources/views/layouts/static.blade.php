<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body>
<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header--bg-transparent u-header--abs-top pt-3">
    <div class="u-header__section">
        <div id="logoAndNav" class="container">
            <!-- Nav -->
            <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
                <!-- Logo -->
                <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/"
                   aria-label="PayMe">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="36px"
                         height="36px" viewBox="0 0 36 36" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#377dff"
                    d="M18,0H29.38A6.62,6.62,0,0,1,36,6.62V18A18,18,0,0,1,18,36H18A18,18,0,0,1,0,18V18A18,18,0,0,1,18,0Z"/>
                        <path fill="#fff"
                              d="M679,395.44a17.22,17.22,0,0,1-6-1.34v-4.54a20.76,20.76,0,0,0,3.58,1.35,12.85,12.85,0,0,0,3.4.54,4.11,4.11,0,0,0,1.77-.28,1,1,0,0,0,.56-.94.93.93,0,0,0-.4-.76,6.14,6.14,0,0,0-1.35-.71c-.63-.27-1.48-.59-2.56-1a11.94,11.94,0,0,1-2.91-1.44,5,5,0,0,1-1.61-1.79,5.38,5.38,0,0,1-.51-2.47,4.37,4.37,0,0,1,1.51-3.53A8.15,8.15,0,0,1,679,377v-2h3v1.86a17.92,17.92,0,0,1,5.81,1.34l-1.72,3.92a14.14,14.14,0,0,0-5.47-1.29,3.55,3.55,0,0,0-1.63.27.86.86,0,0,0-.47.79,1,1,0,0,0,.34.75,5.45,5.45,0,0,0,1.18.66q.84.36,2.34.84a11.29,11.29,0,0,1,4.34,2.32,4.48,4.48,0,0,1,1.32,3.35,4.89,4.89,0,0,1-1.54,3.75,7.75,7.75,0,0,1-4.5,1.79V398h-3Z"
                              transform="translate(-662 -369)"/>
            </svg>
                    <span class="u-header__navbar-brand-text">PayMe</span>
                </a>
                <!-- End Logo -->

                <!-- Responsive Toggle Button -->
                <button type="button" class="navbar-toggler btn u-hamburger" aria-label="Toggle navigation"
                        aria-expanded="false"
                        aria-controls="navBar" data-toggle="collapse" data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
                </button>
                <!-- End Responsive Toggle Button -->

                <!-- Navigation -->
                <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
                    <ul class="navbar-nav u-header__navbar-nav">
                        <!-- Login -->
                        <li class="nav-item u-header__nav-item mr-6">
                            <a class="nav-link u-header__nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        <!-- End Login -->

                        <!-- Button -->
                        <li class="nav-item u-header__nav-item">
                            <a class="btn btn-sm btn-primary transition-3d-hover" href="{{ route('register') }}">
                                Create account
                            </a>
                        </li>
                        <!-- End Button -->
                    </ul>
                </div>
                <!-- End Navigation -->
            </nav>
            <!-- End Nav -->
        </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    @yield('content')
</main>
<!-- ========== END MAIN CONTENT ========== -->

@include('components.footer')

<!-- Go to Top -->
<a class="js-go-to u-go-to" href="#" data-position='{"bottom": 15, "right": 15 }' data-type="fixed"
   data-offset-top="400"
   data-compensation="#header" data-show-effect="slideInUp" data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
</a>
<!-- End Go to Top -->

<!-- JS Core -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- JS -->
<script src="{{ asset('js/vendor.js') }}"></script>
</body>

</html>