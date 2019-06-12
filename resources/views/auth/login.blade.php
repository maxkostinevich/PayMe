@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<!-- Form -->
<form class="js-validate mt-5" method="POST" action="{{ route('login') }}">
@csrf
    <!-- Title -->
    <div class="mb-7">
        <h2 class="h3 text-primary font-weight-normal mb-0">
            Welcome <span class="font-weight-semi-bold">back</span>
        </h2>
        <p>Login to manage your account.</p>
    </div>
    <!-- End Title -->

    <!-- Form Group -->
    <div class="form-group">
        <label class="form-label" for="email">Email address</label>
        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email"  value="{{ old('email') }}"
               placeholder="Email address"/>
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
    <!-- End Form Group -->

    <!-- Form Group -->
    <div class="form-group">
        <label class="form-label" for="password">
<span class="d-flex justify-content-between align-items-center">
Password
@if (Route::has('password.request'))
<a class="link-muted text-capitalize font-weight-normal" href="{{ route('password.request') }}">Forgot
  Password?</a>
@endif
</span>
        </label>
        <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password"
               placeholder="Your Password"/>
        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
    <!-- End Form Group -->

    <!-- Checkbox -->
    <div class="mb-5">
        <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
            <input type="checkbox" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}
                   name="remember" />
            <label class="custom-control-label" for="remember">
                <small>
                    Remember Me
                </small>
            </label>
        </div>
    </div>
    <!-- End Checkbox -->


    <!-- Button -->
    <div class="row align-items-center mb-5">
        @if (Route::has('register'))
        <div class="col-6">
            <span class="small text-muted">Don't have an account?</span>
            <a class="small" href="{{ route('register') }}">Signup</a>
        </div>
        @endif

        <div class="col-6 text-right">
            <button type="submit" class="btn btn-primary transition-3d-hover">
                Login
            </button>
        </div>
    </div>
    <!-- End Button -->
</form>
<!-- End Form -->
@endsection
