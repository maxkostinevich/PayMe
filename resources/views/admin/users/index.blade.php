@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <!-- Title -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3 class="h6 mb-0">Users</h3>
    </div>
    <!-- End Title -->
    <!-- Users -->
    <div class="card">
        <div class="card-body p-4">
            <!-- Users Table -->
            <div class="table-responsive-md">
                <table class="table table-borderless table-striped">
                    <thead>
                    <tr class="text-uppercase font-size-1">
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                User
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Earnings
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">
                                Lifetime Value
                            </div>
                        </th>
                        <th scope="col" class="font-weight-medium">
                            <div class="d-flex justify-content-between align-items-center">

                            </div>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="font-size-1">
                    @forelse($users as $user)
                        <tr>
                            <td class="align-middle">
                                <span class="d-block">{{ $user->name }}</span>
                                <span class="d-block text-muted small">{{ $user->email }}</span>
                                <span class="d-block text-muted small">{{ $user->created_at->format('F d, Y \a\t h:i A') }}</span>
                            </td>
                            @php
                                $stats = $user->getStats()
                            @endphp
                            <td class="align-middle">
                                <span class="d-block">{{ amountFormattedWithCurrency($stats['totalSales']) }}</span>
                                <span class="d-block text-muted small">{{ amountFormattedWithCurrency($stats['salesLast30Days']) }} last 30 days</span>
                            </td>
                            <td class="align-middle">
                                <span class="d-block">{{ amountFormattedWithCurrency($stats['ltv']) }}</span>
                            </td>
                            <td class="align-middle">
                                @if(!$user->isAdmin())
                                    @if($user->trashed())
                                        <a href="#" class="text-primary small" onclick="if(confirm('Restore this user?')){document.getElementById('restore-entity-{{ $user->id }}').submit();return false;}"><span class="fas fa-redo-alt"></span> Restore</a>
                                        <form id="restore-entity-{{ $user->id }}" action="{{ route('admin.users.restore', $user->id) }}" method="POST">
                                            <input type="hidden" name="_method" value="PATCH">
                                            @csrf
                                        </form>
                                    @else
                                        <a href="#" class="text-danger small" onclick="if(confirm('Delete this user?')){document.getElementById('delete-entity-{{ $user->id }}').submit();return false;}"><span class="far fa-trash-alt"></span> Delete</a>
                                        <form id="delete-entity-{{ $user->id }}" action="{{ route('admin.users.destroy', $user) }}" method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            @csrf
                                        </form>
                                    @endif
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
            <!-- End Users Table -->
        </div>
    </div>
    <!-- End Users -->
    {{ $users->links('components.pagination') }}
@endsection