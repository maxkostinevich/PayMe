<!-- Breadcrumb Section -->
<div class="bg-primary">
    <div class="container space-top-1 pb-3">
        <div class="row">
            <div class="col-lg-7 order-lg-1">
                <!-- User Info -->
                <div class="media d-block d-sm-flex align-items-sm-center">
                    <div class="u-lg-avatar position-relative mb-3 mb-sm-0 mr-3">
                        @if(auth()->user()->avatar)
                            <img class="img-fluid rounded-circle"
                                 src="{{ url('storage/' . auth()->user()->avatar) }}">
                        @else
                            <span class="btn btn-lg btn-light btn-icon text-muted gradient-half-primary-v2 rounded-circle">
                              <span class="btn-icon__inner">{{ substr(Auth::user()->name, 0, 1) }}</span>
                            </span>
                        @endif
                        <span class="badge badge-md badge-outline-success badge-pos badge-pos--bottom-right rounded-circle">
                  <span class="fas fa-check"></span>
                </span>
                    </div>
                    <div class="media-body">
                        <span class="d-block text-white small">Howdy,</span>
                        <span class="d-block text-white font-weight-medium">{{ Auth::user()->name }}</span>
                        <div class="mt-1">
                            <a class="link-white small" href="{{ route('settings.edit') }}">Edit profile</a>
                        </div>

                    </div>
                </div>
                <!-- End User Info -->
            </div>
        </div>
    </div>

    <div class="container space-bottom-1 space-bottom-lg-0">
        <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
            <!-- Navbar -->
            <div class="u-header u-header-left-aligned-nav u-header--bg-transparent-lg u-header--white-nav-links z-index-4">
                <div class="u-header__section bg-transparent">
                    <nav class="js-breadcrumb-menu navbar navbar-expand-lg u-header__navbar u-header__navbar--no-space">
                        <div id="breadcrumbNavBar" class="collapse navbar-collapse u-header__navbar-collapse">
                            <ul class="navbar-nav u-header__navbar-nav">
                                <!-- Dashboard -->
                                <li class="nav-item u-header__nav-item">
                                    <a class="nav-link u-header__nav-link {{ Route::currentRouteNamed('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                        Dashboard
                                    </a>
                                </li>
                                <!-- Dashboard -->

                                <!-- Payments -->
                                <li class="nav-item u-header__nav-item">
                                    <a class="nav-link u-header__nav-link {{ Route::currentRouteNamed('payments.*') ? 'active' : '' }}" href="{{ route('payments.index') }}">
                                        Payments
                                    </a>
                                </li>
                                <!-- Payments -->

                                <!-- Payment Forms -->
                                <li class="nav-item u-header__nav-item">
                                    <a class="nav-link u-header__nav-link {{ Route::currentRouteNamed('forms.*') ? 'active' : '' }}" href="{{ route('forms.index') }}">
                                        Payment forms
                                    </a>
                                </li>
                                <!-- Payment Forms -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Breadcrumb Nav Toggle Button -->
            <div class="d-lg-none">
                <button type="button" class="navbar-toggler btn u-hamburger u-hamburger--white collapsed mb-3" aria-label="Toggle navigation"
                        aria-expanded="false" aria-controls="breadcrumbNavBar" data-toggle="collapse" data-target="#breadcrumbNavBar">
              <span id="breadcrumbHamburgerTrigger" class="u-hamburger__box">
                <span class="u-hamburger__inner"></span>
              </span>
                </button>
            </div>
            <!-- End Breadcrumb Nav Toggle Button -->

            <div class="ml-lg-auto">
                <!-- Button -->
                <a class="btn btn-sm btn-soft-white text-nowrap transition-3d-hover" href="{{ route('forms.create') }}">
                    <span class="fas fa-plus small mr-2"></span>
                    Create payment form
                </a>
                <!-- End Button -->
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumb Section -->