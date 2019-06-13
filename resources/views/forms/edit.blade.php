@extends('layouts.app')

@section('title', 'Settings')

@section('content')
<!-- Title -->
<div class="d-flex flex-column align-items-start mb-3">
    <a href="{{ route('forms.index') }}" class="text-muted small mb-3">&laquo; Back</a>
    <h3 class="h6 mb-0">Create payment form</h3>
</div>
<!-- End Title -->

<div class="row">
    <div class="col-12 col-md-8 col-lg-5">
        <!-- Form -->
        <div class="card">
            <div class="card-body p-5">
                <form>
                    <div class="form-group">
                        <label for="description">Payment Description</label>
                        <input type="email" class="form-control" id="description"
                               placeholder="Payment description">
                        <small class="form-text text-muted">Enter the payment description
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <div class="row">
                            <div class="col-7">
                                <input type="text" name="amount" id="amount" class="form-control"
                                       placeholder="2000">
                            </div>
                            <div class="col-5">
                                <select class="form-control">
                                    <option>USD</option>
                                    <option>EUR</option>
                                    <option>CAD</option>
                                    <option>AUD</option>
                                </select>
                            </div>
                        </div>

                        <small class="form-text text-muted">Enter the payment amount and choose currency
                        </small>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox text-muted">
                            <input type="checkbox" class="custom-control-input" id="isActive">
                            <label class="custom-control-label" for="isActive">
                                <small>
                                    Active
                                </small>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary float-right">Create</button>
                    <a href="#" class="btn btn-sm btn-text btn-text-secondary float-right"><span class="small">Cancel</span></a>
                </form>
            </div>
        </div>
        <!-- End Form -->
    </div>
</div>
@endsection