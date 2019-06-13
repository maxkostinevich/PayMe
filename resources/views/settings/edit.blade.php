@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="h6 mb-0">Settings</h3>
    </div>
    <!-- End Title -->

    <div class="row">
        <div class="col-12 col-md-6">
            <!-- Connect Stripe -->
            <div class="border-bottom mb-3 pb-3">
                <div class="card">
                    <div class="card-body p-5 text-center">
                        <button type="button" class="btn btn-primary mb-3">Connect Stripe Account</button>
                        <span class="d-block text-muted small">In order to get paid, please connect your
                                    <a href="https://stripe.com"
                                       target="_blank">Stripe</a>
                                    account
                                </span>
                        <!--
                        <span class="btn btn-icon btn-soft-success text-success rounded-circle m-3">
                          <span class="btn-icon__inner"><span class="fas fa-check"></span></span>
                        </span>
                        <span class="d-block text-muted small">Your Stripe Account is connected.</span>
                        <a href="#" class="d-block text-danger small">Deactivate</a>
                        -->
                    </div>
                </div>
            </div>
            <!-- End Connect Stripe -->
        </div>
    </div>
    <div class="row align-items-end">
        <div class="col-12 col-md-6">
            <!-- Settings Form -->
            <div class="card">
                <div class="card-body p-5">
                    <form method="post" action="{{ route('settings.update') }}">
                        @csrf
                        <input type="hidden" name="_method" value="patch">
                        <div class="media align-items-center border-bottom pb-3 mb-3">
                            <div class="u-lg-avatar mr-3">
                                        <span class="btn btn-lg btn-icon text-muted gradient-half-primary-v2 rounded-circle border shadow-sm">
                                          <span class="btn-icon__inner">J</span>
                                        </span>
                                <!--img class="img-fluid rounded-circle border shadow-sm"
                                     src="#"-->
                            </div>
                            <div class="media-body">
                                <label class="btn btn-sm btn-primary file-attachment-btn mb-1 mb-sm-0 mr-1"
                                       for="fileAttachmentBtn">
                                    Upload New Picture
                                    <input id="fileAttachmentBtn" name="file-attachment" type="file"
                                           class="file-attachment-btn__label">
                                </label>
                                <button type="button" class="btn btn-sm btn-soft-secondary mb-1 mb-sm-0">
                                    Delete
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name', auth()->user()->name) }}" name="name" id="name"
                                   placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <label for="company">Company</label>
                            <input type="text" class="form-control{{ $errors->has('company') ? ' is-invalid' : '' }}" value="{{ old('company', auth()->user()->company) }}" name="company" id="company"
                                   placeholder="Your Company">
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email', auth()->user()->email) }}" name="email" id="email"
                                   placeholder="Your Email">
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary float-right">Update</button>
                    </form>
                </div>
            </div>
            <!-- End Settings Form -->
        </div>
        <div class="col-12 col-md-6 pt-3">
            <!-- Password Form -->
            <div class="card">
                <div class="card-body p-5">
                    <form>
                        <div class="form-group border-bottom pb-2 mb-2">
                            <label for="currentPassword">Current Password</label>
                            <input type="password" class="form-control" id="currentPassword"
                                   placeholder="Your Current Password">
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input type="email" class="form-control" id="password"
                                   placeholder="Enter New Password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirm">Confirm New Password</label>
                            <input type="password" class="form-control" id="password_confirm"
                                   placeholder="Confirm New Password">
                        </div>
                        <button type="button" class="btn btn-sm btn-primary float-right">Update Password</button>
                    </form>
                </div>
            </div>
            <!-- End Password Form -->
        </div>
    </div>
@endsection