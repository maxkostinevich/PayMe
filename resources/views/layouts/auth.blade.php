<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
<!-- ========== HEADER ========== -->
<header id="header" class="u-header u-header--bg-transparent u-header--abs-top pt-3">
    <div class="u-header__section">
        <div id="logoAndNav" class="container-fluid">
            <!-- Nav -->
            <nav class="navbar navbar-expand u-header__navbar">
                <!-- White Logo -->
                <a class="d-none d-lg-flex navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white"
                   href="/" aria-label="PayMe">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="36px"
                         height="36px" viewBox="0 0 36 36" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#FFFFFF"
                    d="M18,0h11.4C33,0,36,3,36,6.6c0,0,0,0,0,0V18c0,9.9-8.1,18-18,18l0,0C8.1,36,0,27.9,0,18l0,0C0,8.1,8.1,0,18,0z"/>
                        <path fill="#377DFF" d="M17,26.4c-2.1-0.1-4.1-0.5-6-1.3v-4.5c1.1,0.6,2.3,1,3.6,1.4c1.1,0.3,2.2,0.5,3.4,0.5c0.6,0,1.2-0.1,1.8-0.3
                            c0.4-0.2,0.6-0.5,0.6-0.9c0-0.3-0.2-0.6-0.4-0.8c-0.4-0.3-0.9-0.5-1.3-0.7c-0.6-0.3-1.5-0.6-2.6-1c-1-0.3-2-0.8-2.9-1.4
                            c-0.7-0.5-1.2-1.1-1.6-1.8c-0.4-0.8-0.5-1.6-0.5-2.5c-0.1-1.3,0.5-2.6,1.5-3.5C13.8,8.6,15.4,8,17,8V6h3v1.9c2,0.1,4,0.6,5.8,1.3
                            l-1.7,3.9c-1.7-0.8-3.6-1.2-5.5-1.3c-0.6,0-1.1,0.1-1.6,0.3c-0.3,0.2-0.5,0.5-0.5,0.8c0,0.3,0.1,0.6,0.3,0.8
                            c0.4,0.3,0.8,0.5,1.2,0.7c0.6,0.2,1.3,0.5,2.3,0.8c1.6,0.4,3.1,1.2,4.3,2.3c0.9,0.9,1.4,2.1,1.3,3.4c0.1,1.4-0.5,2.8-1.5,3.8
                            c-1.3,1.1-2.8,1.7-4.5,1.8V29h-3L17,26.4z"/>
            </svg>
                    <span class="u-header__navbar-brand-text">PayMe</span>
                </a>
                <!-- End White Logo -->

                <!-- Default Logo -->
                <a class="d-flex d-lg-none navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-collapsed"
                   href="/" aria-label="PayMe">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="36px"
                         height="36px" viewBox="0 0 36 36" xml:space="preserve" style="margin-bottom: 0;">
              <path fill="#377dff"
                    d="M18,0H29.38A6.62,6.62,0,0,1,36,6.62V18A18,18,0,0,1,18,36H18A18,18,0,0,1,0,18V18A18,18,0,0,1,18,0Z"/>
                        <path fill="#fff"
                              d="M679,395.44a17.22,17.22,0,0,1-6-1.34v-4.54a20.76,20.76,0,0,0,3.58,1.35,12.85,12.85,0,0,0,3.4.54,4.11,4.11,0,0,0,1.77-.28,1,1,0,0,0,.56-.94.93.93,0,0,0-.4-.76,6.14,6.14,0,0,0-1.35-.71c-.63-.27-1.48-.59-2.56-1a11.94,11.94,0,0,1-2.91-1.44,5,5,0,0,1-1.61-1.79,5.38,5.38,0,0,1-.51-2.47,4.37,4.37,0,0,1,1.51-3.53A8.15,8.15,0,0,1,679,377v-2h3v1.86a17.92,17.92,0,0,1,5.81,1.34l-1.72,3.92a14.14,14.14,0,0,0-5.47-1.29,3.55,3.55,0,0,0-1.63.27.86.86,0,0,0-.47.79,1,1,0,0,0,.34.75,5.45,5.45,0,0,0,1.18.66q.84.36,2.34.84a11.29,11.29,0,0,1,4.34,2.32,4.48,4.48,0,0,1,1.32,3.35,4.89,4.89,0,0,1-1.54,3.75,7.75,7.75,0,0,1-4.5,1.79V398h-3Z"
                              transform="translate(-662 -369)"/>
            </svg>
                    <span class="d-inline-block u-header__navbar-brand-text">PayMe</span>
                </a>
                <!-- End Default Logo -->

        </div>
        <!-- End Button -->
        </nav>
        <!-- End Nav -->
    </div>
    </div>
</header>
<!-- ========== END HEADER ========== -->

<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative height-lg-100vh">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center gradient-half-primary-v1 height-lg-100vh px-0">
            <div class="w-100 p-5">
                <!-- SVG Quote -->
                <figure class="text-center mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                         width="40px"
                         height="40px" viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
              <path class="fill-white" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                                    C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                                    c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                                    C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
            </svg>
                </figure>
                <!-- End SVG Quote -->

                <!-- Testimonials -->
                <div class="mb-4">
                    <!-- Testimonial -->
                    <div class="w-md-80 w-lg-60 text-center mx-auto">
                        <blockquote class="h5 text-white font-weight-normal mb-4">
                            Accepting payments should not be so hard, that's why I created PayMe 🙂
                        </blockquote>
                        <h1 class="h6 text-white-70 text-nowrap"><a href="https://laravel101.com" target="_blank"><span
                                        class="text-white-70">Max
                    Kostinevich, <br> Laravel 101</span></a></h1>
                    </div>
                    <!-- End Testimonial -->
                </div>
                <!-- End Testimonials -->

                <!-- Testimonials Carousel Pagination -->
                <div class="mx-auto">
                    <div class="u-avatar mx-auto">
                        <a href="https://maxkostinevich.com" target="_blank">
                            <img class="img-fluid rounded-circle"
                                 src="https://avatars3.githubusercontent.com/u/10295466?s=100&v=4"/>
                        </a>
                    </div>
                </div>
                <!-- End Testimonials Carousel Pagination -->

                <!-- Clients -->
                <div class="position-absolute right-0 bottom-0 left-0 text-center p-5">
                    <h4 class="h6 text-white-70 mb-3">Built on top of</h4>
                    <div class="d-flex justify-content-center">
                        <div class="mx-4">
                            <img class="u-clients" src="{{ asset('img/icon-stripe-white.svg') }}" alt="Stripe"/>
                        </div>
                    </div>
                </div>
                <!-- End Clients -->
            </div>
        </div>

        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-3 space-lg-0">
                @yield('content')
                </div>
            </div>
        </div>
    </div>
    <!-- End Form -->
</main>
<!-- ========== END MAIN ========== -->

<!-- JS Core -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- JS -->
<script src="{{ asset('js/vendor.js') }}"></script>
</body>

</html>