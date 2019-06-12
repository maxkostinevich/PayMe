@extends('layouts.auth')

@section('title', 'Reset Password')

@section('content')
    <!-- Form -->
    <form class="js-validate mt-5" method="POST" action="{{ route('password.email') }}">
    @csrf
        <!-- Title -->
        <div class="mb-7">
            <h1 class="h3 text-primary font-weight-normal mb-0">
                Forgot your
                <span class="font-weight-semi-bold">password?</span>
            </h1>
            <p>
                Enter your email address below and we'll get you back on
                track.
            </p>
        </div>
        <!-- End Title -->
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <!-- Form Group -->
        <div class="form-group">
            <label class="form-label" for="email">Email address</label>
            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" name="email" id="email"
                   placeholder="Email address"/>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <!-- End Form Group -->

        <!-- Button -->
        <div class="row align-items-center mb-5">
            <div class="col-4 col-sm-6">
                <a class="small link-muted" href="{{ route('login') }}">Back to sign in</a>
            </div>

            <div class="col-8 col-sm-6 text-right">
                <button type="submit" class="btn btn-primary transition-3d-hover">
                    Request Reset Link
                </button>
            </div>
        </div>
        <!-- End Button -->
    </form>
    <!-- End Form -->
@endsection