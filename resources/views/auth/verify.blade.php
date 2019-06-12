@extends('layouts.auth')

@section('title', 'Verify Your Email Address')

@section('content')
    <!-- Title -->
    <div class="mb-7">
        <h1 class="h3 text-primary font-weight-normal mb-0">
            One <span class="font-weight-semi-bold">last step..</span>
        </h1>
        <p>Please, verify your email address</p>
    </div>
    <!-- End Title -->

    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('A fresh verification link has been sent to your email address.') }}
        </div>
    @endif

    {{ __('Before proceeding, please check your email for a verification link.') }}
    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
@endsection