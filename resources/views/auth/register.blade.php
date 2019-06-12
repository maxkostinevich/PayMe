@extends('layouts.auth')

@section('title', 'Create an account')

@section('content')
    <!-- Form -->
    <form class="js-validate mt-5" method="POST" action="{{ route('register') }}">
    @csrf
        <!-- Title -->
        <div class="mb-7">
            <h1 class="h3 text-primary font-weight-normal mb-0">
                Welcome to <span class="font-weight-semi-bold">PayMe</span>
            </h1>
            <p>Fill-in the form to login into your account.</p>
        </div>
        <!-- End Title -->

        <!-- Form Group -->
        <div class="form-group">
            <label class="form-label" for="name">Your name</label>
            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" name="name" id="name"
                   placeholder="Your name"
            />
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
        <!-- End Form Group -->

        <!-- Form Group -->
        <div class="form-group">
            <label class="form-label" for="email">Email address</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" id="email"
                   placeholder="Email address"
            />
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <!-- End Form Group -->

        <!-- Form Row -->
        <div class="form-row">
            <!-- Form Group -->
            <div class="form-group col-md-6">
                <label class="form-label" for="password">Password</label>
                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password" />
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class=" form-group col-md-6">
                <label class="form-label" for="password_confirmation">Confirm password</label>
                <input type="password" class="form-control" name="password_confirmation"
                       id="password_confirmation" />
            </div>
            <!-- End Form Group -->
        </div>
        <!-- End Form Row -->

        <!-- Checkbox -->
        <div class="js-form-message mb-5">
            <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                <input type="checkbox" class="custom-control-input" id="termsCheckbox"
                       name="termsCheckbox" required
                       data-msg="Please accept our Terms and Conditions." data-error-class="u-has-error"
                       data-success-class="u-has-success"/>
                <label class="custom-control-label" for="termsCheckbox">
                    <small>
                        I agree to the
                        <a class="link-muted" href="{{ route('page.terms') }}" target="_blank">Terms and Conditions</a>
                    </small>
                </label>
            </div>
        </div>
        <!-- End Checkbox -->

        <!-- Button -->
        <div class="row align-items-center mb-5">
            <div class="col-5 col-sm-6">
                <span class="small text-muted">Already have an account?</span>
                <a class="small" href="{{ route('login') }}">Login</a>
            </div>

            <div class="col-7 col-sm-6 text-right">
                <button type="submit" class="btn btn-primary transition-3d-hover">
                    Create account
                </button>
            </div>
        </div>
        <!-- End Button -->
    </form>
    <!-- End Form -->
@endsection