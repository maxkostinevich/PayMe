<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }} - Home</title>

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
                <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center u-header__navbar-brand-text-white"
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
    <!-- Hero Section -->
    <div class="position-relative">
        <div class="container">
            <div class="row justify-content-lg-between height-lg-100vh">
                <!-- Left Content -->
                <div class="col-lg-5 d-flex align-items-center align-self-lg-center min-height-600 min-height-lg-auto">
                    <!-- Content -->
                    <div class="position-relative z-index-2">
                        <div class="mb-7">
                <span class="d-none d-sm-block btn btn-lg btn-icon btn-white text-primary rounded-circle mb-4">
                  <span class="fas fa-credit-card btn-icon__inner"></span>
                </span>
                            <h1 class="display-4 font-size-5 font-size-md-down-5 text-white font-weight-semi-bold">
                                Accept payments
                                online</h1>
                            <p class="text-white-70">Hassle-free solution to accept payments online for freelancers,
                                digital
                                artists and small agencies.</p>
                        </div>

                        <a class="btn btn-white transition-3d-hover" href="{{ route('register') }}">
                            Create account
                            <span class="fas fa-arrow-right small ml-2"></span>
                        </a>

                        <!--div class="mt-5 alert alert-warning" role="alert">
                          <div class="alert-heading mb-2">🔥🔥🔥 Test mode is <b>ON</b>.</div>
                          <div class="small">
                            You can learn how to develop such projects and get full source code of the app at <a href="https://laravel101.com"
                              target="_blank" class="alert-link"><u>Laravel 101</u></a>.
                          </div>
                        </div-->

                    </div>
                    <!-- End Content -->
                </div>
                <!-- End Left Content -->

                <!-- Right Content -->
                <div class="col-lg-5 align-self-center space-2 space-md-3 space-lg-0">
                    <!-- Hero Carousel -->
                    <div class="js-slick-carousel" data-fade="true"
                         data-pagi-classes="text-center u-slick__pagination mt-7 mb-0">
                        <div class="js-slide px-4">
                            <div>
                                <!-- Title -->
                                <div class="text-center mb-7">
                    <span class="btn btn-icon btn-soft-primary rounded-circle mb-4">
                      <span class="small font-weight-semi-bold btn-icon__inner">01.</span>
                    </span>
                                    <h2 class="h4 text-primary">Signup to PayMe</h2>
                                    <p>Create your account at PayMe and start accept payments online in no time.</p>
                                </div>
                                <!-- End Title -->
                            </div>
                        </div>

                        <div class="js-slide px-4">
                            <div>
                                <!-- Title -->
                                <div class="text-center mb-7">
                    <span class="btn btn-icon btn-soft-primary rounded-circle mb-4">
                      <span class="small font-weight-semi-bold btn-icon__inner">02.</span>
                    </span>
                                    <h2 class="h4 text-primary">Connect your Stripe Account</h2>
                                    <p>Connect your Stripe account using Stripe Connect, no code is required.</p>
                                </div>
                                <!-- End Title -->
                            </div>
                        </div>

                        <div class="js-slide px-4">
                            <div>
                                <!-- Title -->
                                <div class="text-center mb-7">
                    <span class="btn btn-icon btn-soft-primary rounded-circle mb-4">
                      <span class="small font-weight-semi-bold btn-icon__inner">03.</span>
                    </span>
                                    <h2 class="h4 text-primary">Create a payment form</h2>
                                    <p>Create a new payment form to start accepting payments online.</p>
                                </div>
                                <!-- End Title -->
                            </div>
                        </div>

                        <div class="js-slide px-4">
                            <div>
                                <!-- Title -->
                                <div class="text-center mb-7">
                    <span class="btn btn-icon btn-soft-primary rounded-circle mb-4">
                      <span class="small font-weight-semi-bold btn-icon__inner">04.</span>
                    </span>
                                    <h2 class="h4 text-primary">Get paid</h2>
                                    <p>You'll be paid directly to your Bank Account on weekly basis. All payouts will be
                                        automatically
                                        processed by Stripe.</p>
                                </div>
                                <!-- End Title -->
                            </div>
                        </div>
                    </div>
                    <!-- End Hero Carousel -->
                </div>
                <!-- End Right Content -->
            </div>
        </div>

        <!-- Go to Arrow -->
        <div class="d-none d-lg-block position-absolute right-0 bottom-0 left-0 text-center mb-5">
            <a class="js-go-to u-go-to-modern" href="javascript:;" data-target="#content-section" data-type="static">
                <span class="fas fa-arrow-down u-go-to-modern__inner"></span>
            </a>
        </div>
        <!-- End Go to Arrow -->

        <div class="col-lg-6 gradient-half-primary-v1 position-absolute top-0 left-0 min-height-600 height-lg-100vh"></div>
    </div>
    <!-- End Hero Section -->

    <!-- What We Do Section -->
    <div id="content-section" class="container space-2">
        <div class="row justify-content-lg-between">
            <div class="col-lg-4 mb-7 mb-lg-0">
                <!-- Title -->
                <small class="text-secondary text-uppercase font-weight-medium mb-2">What is PayMe?</small>
                <h3 class="font-weight-medium">PayMe is a checkout payment solution built on top of Stripe API.</h3>
                <p>Payme allows you to collect one-time payments and sell your services and digital products
                    in no time.
                </p>
                <!-- End Title -->
            </div>

            <div class="col-lg-7">
                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <!-- Icon Blocks -->
                        <figure id="icon26" class="ie-height-56 w-100 max-width-8 mb-3">
                            <img src="{{ asset('img/icon-card.svg') }}">
                        </figure>
                        <h4 class="h5">Accept credit cards</h4>
                        <p class="font-size-1">Accept all major credit cards from the customers all over the world.</p>
                        <!-- End Icon Blocks -->
                    </div>

                    <div class="col-sm-6 mb-3">
                        <!-- Icon Blocks -->
                        <figure id="icon27" class="ie-height-56 w-100 max-width-8 mb-3">
                            <img src="{{ asset('img/icon-code.svg') }}">
                        </figure>
                        <h4 class="h5">No coding required</h4>
                        <p class="font-size-1">Create a Payment Form and start accepting payments without any
                            coding.</p>
                        <!-- End Icon Blocks -->
                    </div>

                    <div class="w-100"></div>

                    <div class="col-sm-6 mb-3 mb-sm-0">
                        <!-- Icon Blocks -->
                        <figure id="icon25" class="ie-height-56 w-100 max-width-8 mb-3">
                            <img src="{{ asset('img/icon-security.svg') }}">
                        </figure>
                        <h4 class="h5">World-class security</h4>
                        <p class="font-size-1">PayMe is built on Stripe, which is PCI-certified Service Provider.</p>
                        <!-- End Icon Blocks -->
                    </div>

                    <div class="col-sm-6">
                        <!-- Icon Blocks -->
                        <figure id="icon28" class=" ie-height-56 w-100 max-width-8 mb-3">
                            <img src="{{ asset('img/icon-payout.svg') }}">
                        </figure>
                        <h4 class="h5">Automatic payouts</h4>
                        <p class="font-size-1">Your earnings will be automatically sent directly to your Bank
                            Account.</p>
                        <!-- End Icon Blocks -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End What We Do Section -->

    <!-- CTA Section -->
    <div class="bg-primary text-white text-center">
        <div class="container space-1">
        <span class="h6 d-block d-lg-inline-block font-weight-light mb-lg-0">
          <span class="font-weight-semi-bold">PayMe</span> – is a one-stop solution to accept payments online
        </span>
            <a class="btn btn-sm btn-white transition-3d-hover font-weight-normal ml-2" href="{{ route('register') }}">Create
                account</a>
        </div>
    </div>
    <!-- End CTA Section -->
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