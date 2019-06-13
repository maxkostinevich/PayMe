@extends('layouts.app')

@section('title', 'Settings')

@section('content')
    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="h6 mb-0">Payment Forms</h3>
    </div>
    <!-- End Title -->
    <!-- Forms -->
    <div class="card">
        <div class="card-body p-4">
            <!-- Forms Table -->
            <div class="table-responsive-md">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr class="text-uppercase font-size-1">
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Link
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Amount
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Earnings
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="font-size-1">
                    @forelse($forms as $form)
                        <tr>
                            <td class="align-middle font-weight-normal">
                                <a href="{{ route('form.show', $form->uid) }}" target="_blank" class="d-block text-{{ $form->is_active ? 'success' : 'muted' }} small">
                                    <span class="fas fa-circle small mr-1"></span>
                                    {{ route('form.show', $form->uid) }}</a>
                            </td>
                            <td class="align-middle">
                                <span class="d-block">{{ $form->amountFormattedWithCurrency() }}</span>
                                <span class="d-block text-muted small">{{ $form->description }}</span>
                            </td>
                            <td class="align-middle">
                                <span class="d-block">2,390.00 USD</span>
                                <a href="#" class="link-muted small">10 payments</a>
                            </td>
                            <td class="align-middle">
                                <a href="{{ route('forms.edit', $form->uid) }}" class="small mr-3"><span class="fas fa-edit"></span> Edit</a>
                                <a href="#" class="small text-danger" onclick="if(confirm('Delete this record?')){document.getElementById('delete-entity-{{ $form->uid }}').submit();return false;}"><span class="far fa-trash-alt"></span> Delete</a>
                                <form id="delete-entity-{{ $form->uid }}" action="{{ route('forms.destroy', $form->uid) }}" method="POST">
                                    <input type="hidden" name="_method" value="DELETE">
                                    @csrf
                                </form>
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
            <!-- End Forms Table -->
        </div>
    </div>
    <!-- End Forms -->
    {{ $forms->links('components.pagination') }}
@endsection