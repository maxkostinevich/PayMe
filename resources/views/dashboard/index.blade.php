@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <!--div class="alert alert-warning border border-warning" role="alert">
      <h5 class="alert-heading">🔥 Test mode is <b>ON</b> 🔥</h5>
      <div class="small mb-3">
        You can learn how to develop such projects and get full source code of the app at <a href="https://laravel101.com"
          target="_blank" class="alert-link"><u>Laravel 101</u></a>.
      </div>
      <div class="small">
        You can connect your <b>development Stripe account</b> for testing
        purposes. <br>
        Follow <a href="https://stripe.com/docs/testing#cards" target="_blank">this
          guide</a> for testing payments. No real credit cards will be charged.
      </div>
    </div-->

    <!-- Stats -->
    <div class="card-deck d-block d-lg-flex card-lg-gutters-3 mb-6">
        <!-- Card -->
        <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
                <div class="media align-items-center">
        <span class="btn btn-lg btn-icon btn-soft-primary rounded-circle mr-4">
          <span class="fas fa-dollar-sign btn-icon__inner"></span>
        </span>
                    <div class="media-body">
                        <span class="d-block font-size-2">{{ amountFormattedWithCurrency($stats['totalSales']) }}</span>
                        <h2 class="h6 text-secondary font-weight-normal mb-0">Total sales</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card mb-3 mb-lg-0">
            <div class="card-body p-5">
                <div class="media align-items-center">
        <span class="btn btn-lg btn-icon btn-soft-warning rounded-circle mr-4">
          <span class="fas fa-university btn-icon__inner"></span>
        </span>
                    <div class="media-body">
                        <span class="d-block font-size-2">{{ amountFormattedWithCurrency($stats['netEarnings']) }}</span>
                        <h3 class="h6 text-secondary font-weight-normal mb-0">Total net earnings</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->

        <!-- Card -->
        <div class="card">
            <div class="card-body p-5">
                <div class="media align-items-center">
                    <span class="btn btn-lg btn-icon btn-soft-success rounded-circle mr-4">
                      <span class="far fa-calendar-check btn-icon__inner"></span>
                    </span>
                    <div class="media-body">
                        <div class="">
                            <span class="font-weight-medium font-size-1">{{ amountFormattedWithCurrency($stats['salesLast30Days']) }}</span>
                            <span class="text-secondary font-size-1">Earned</span>
                        </div>
                        <div class="mb-1">
                            <span class="font-weight-medium font-size-1">{{ $stats['paymentsLast30Days'] }}</span>
                            <span class="text-secondary font-size-1">Payments</span>
                        </div>
                        <h3 class="h6 text-secondary font-weight-normal mb-0">In last 30 days</h3>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
    <!-- End Stats -->

    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="h6 mb-0">Latest Payments</h3>
        <a class="link-muted" href="{{ route('payments.index') }}">View All</a>
    </div>
    <!-- End Title -->
    <!-- Payments -->
    <div class="card">
        <div class="card-body p-4">
            <!-- Payments Table -->
            <div class="table-responsive-md">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr class="text-uppercase font-size-1">
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Transaction ID
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Customer
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Amount Paid
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Net earnings
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="font-size-1">
                    @forelse($payments as $payment)
                        <tr>
                            <td class="align-middle font-weight-normal">
                                <span class="d-block"> <a href="https://dashboard.stripe.com" target="_blank"> <span class="fab fa-stripe"></span></a> {{ $payment->charge_id }}</span>
                                <span class="pl-4 d-block text-muted small">{{ $payment->created_at->format('F d, Y \a\t h:i A') }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="d-block">{{ $payment->customer_name }}</span>
                                <span class="d-block text-muted small">{{ $payment->customer_email }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="d-block">{{ $payment->amountFormattedWithCurrency() }}</span>
                                <a href="{{ route('forms.edit', $payment->form) }}" class="link-muted small">{{ $payment->form->description }}</a>
                            </td>
                            <td class="align-middle">
                                <span class="d-block">{{ $payment->netFormattedWithCurrency() }}</span>
                                <span class="d-block text-muted small">Platform Fee: {{ $payment->feeFormattedWithCurrency() }}</span>
                            </td>
                            <td class="align-middle">
                                <a href="{{ $payment->receipt_url }}" target="_blank" class="text-primary small mr-3"><span class="fas fa-receipt"></span> Receipt</a>
                                @if($payment->is_refunded)
                                    <span class="small text-muted"><span class="fas fa-circle small"></span> Refunded</span>
                                @else
                                    <a href="#" class="text-danger small" onclick="if(confirm('Refund this payment?')){document.getElementById('refund-entity-{{ $payment->id }}').submit();return false;}"><span class="fas fa-redo-alt"></span> Refund</a>
                                    <form id="refund-entity-{{ $payment->id }}" action="{{ route('payments.update', $payment) }}" method="POST">
                                        <input type="hidden" name="_method" value="PATCH">
                                        @csrf
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="align-center">
                                <strong>No records found</strong><br>
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            <!-- End Payments Table -->
        </div>
    </div>
    <!-- End Payments -->

@endsection