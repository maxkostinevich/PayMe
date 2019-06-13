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
                    <tr>
                        <td class="align-middle font-weight-normal">
                            <a href="#" target="_blank" class="d-block text-success small">
                                <span class="fas fa-circle small mr-1"></span>
                                https://payme.rocks/p/UeVvxgEgoZ86</a>
                        </td>
                        <td class="align-middle">
                            <span class="d-block">239.00 USD</span>
                            <span class="d-block text-muted small">Laravel Course</span>
                        </td>
                        <td class="align-middle">
                            <span class="d-block">2,390.00 USD</span>
                            <a href="#" class="link-muted small">10 payments</a>
                        </td>
                        <td class="align-middle">
                            <a href="#" class="small mr-3"><span class="fas fa-edit"></span> Edit</a>
                            <a href="#" class="small text-danger"><span class="far fa-trash-alt"></span> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-normal">
                            <a href="#" target="_blank" class="d-block text-muted small">
                                <span class="fas fa-circle small mr-1"></span>
                                https://payme.rocks/p/UeVvxgEgoZ86</a>
                        </td>
                        <td class="align-middle">
                            <span class="d-block">239.00 USD</span>
                            <span class="d-block text-muted small">Laravel Course</span>
                        </td>
                        <td class="align-middle">
                            <span class="d-block">2,390.00 USD</span>
                            <a href="#" class="link-muted small">10 payments</a>
                        </td>
                        <td class="align-middle">
                            <a href="#" class="small mr-3"><span class="fas fa-edit"></span> Edit</a>
                            <a href="#" class="small text-danger"><span class="far fa-trash-alt"></span> Delete</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle font-weight-normal">
                            <a href="#" target="_blank" class="d-block text-success small">
                                <span class="fas fa-circle small mr-1"></span>
                                https://payme.rocks/p/UeVvxgEgoZ86</a>
                        </td>
                        <td class="align-middle">
                            <span class="d-block">239.00 USD</span>
                            <span class="d-block text-muted small">Laravel Course</span>
                        </td>
                        <td class="align-middle">
                            <span class="d-block">2,390.00 USD</span>
                            <a href="#" class="link-muted small">10 payments</a>
                        </td>
                        <td class="align-middle">
                            <a href="#" class="small mr-3"><span class="fas fa-edit"></span> Edit</a>
                            <a href="#" class="small text-danger"><span class="far fa-trash-alt"></span> Delete</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- End Forms Table -->
        </div>
    </div>
    <!-- End Forms -->
    <!-- Pagination -->
    <nav class="d-flex justify-content-between align-items-center mt-3">
        <ul class="pagination">
            <li class="page-item disabled">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">«</span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
            <li class="page-item"><a class="page-link" href="#">8</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">»</span>
                    <span class="sr-only">Next</span>
                </a>
            </li>
        </ul>
        <small class="text-muted pb-2">Showing 3 of 8 entries</small>
    </nav>
    <!-- End Pagination -->
@endsection