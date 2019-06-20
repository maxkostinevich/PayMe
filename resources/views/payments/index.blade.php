@extends('layouts.app')

@section('title', 'Payments')

@section('content')
    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        @if(isset($form))
        <h3 class="h6 mb-0">Payments for "{{ $form->description }}"</h3>
        @else
        <h3 class="h6 mb-0">Payments</h3>
        @endif
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
    {{ $payments->links('components.pagination') }}
@endsection