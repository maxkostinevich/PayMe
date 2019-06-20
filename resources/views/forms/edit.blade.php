@extends('layouts.app')

@section('title', ($form->id ? 'Edit' : 'Create') . ' payment form' )

@section('content')
<!-- Title -->
<div class="d-flex flex-column align-items-start mb-3">
    <a href="{{ route('forms.index') }}" class="text-muted small mb-3">&laquo; Back</a>
    <h3 class="h6 mb-0">{{ $form->id ? 'Edit' : 'Create' }} payment form</h3>
</div>
<!-- End Title -->

<div class="row">
    <div class="col-12 col-md-8 col-lg-5">
        <!-- Form -->
        <div class="card">
            <div class="card-body p-5">
                <form method="post" action="{{ $form->id ? route('forms.update', $form) : route('forms.store') }}">
                    @csrf
                    @if($form->id)
                        <input type="hidden" name="_method" value="patch">
                    @endif
                    <div class="form-group">
                        <label for="description">Payment Description</label>
                        <input type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" value="{{ old('description', $form->description) }}" name="description" id="description"
                               placeholder="Payment description">
                        <small class="form-text text-muted">Enter the payment description
                        </small>
                    </div>
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <div class="row">
                            <div class="col-7">
                                <input type="text" name="amount" id="amount" class="form-control{{ $errors->has('amount') ? ' is-invalid' : '' }}"
                                       value="{{ old('amount', $form->amountFormatted()) }}"
                                       placeholder="2000">
                            </div>
                            <div class="col-5">
                                <select name="currency" class="form-control">
                                    <option value="usd" {{ old('currency', $form->currency) == 'usd' ? 'selected' : '' }}>USD</option>
                                    <option value="eur" {{ old('currency', $form->currency) == 'eur' ? 'selected' : '' }}>EUR</option>
                                    <option value="cad" {{ old('currency', $form->currency) == 'cad' ? 'selected' : '' }}>CAD</option>
                                    <option value="aud" {{ old('currency', $form->currency) == 'aud' ? 'selected' : '' }}>AUD</option>
                                </select>
                            </div>
                        </div>

                        <small class="form-text text-muted">Enter the payment amount and choose currency
                        </small>
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox text-muted">
                            <input type="checkbox" class="custom-control-input" name="is_active" value="1" id="is_active" {{ old('is_active', $form->is_active) ? 'checked' : '' }}>
                            <label class="custom-control-label" for="is_active">
                                <small>
                                    Active
                                </small>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-sm btn-primary float-right">{{ $form->id ? 'Update' : 'Create' }}</button>
                    <a href="{{ route('forms.index') }}" class="btn btn-sm btn-text btn-text-secondary float-right"><span class="small">Cancel</span></a>
                </form>
            </div>
        </div>
        <!-- End Form -->
    </div>
</div>
@endsection