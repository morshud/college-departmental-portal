@extends('admin.layouts.app')

@section('title', 'Payment')

@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Payments</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to CUCSD Dashboard</li>
                </ol>
            </div>
            {{-- <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="">
                        <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#addStudent">
                            <i class="mdi mdi-account-check-outline me-2"></i> Add Student
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Latest Transaction</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">(#) Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col" colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $payment = \App\Models\Payment::orderBy('id', 'desc')->get();
                                @endphp
                                @if (count($payment) > 0)
                                    @foreach ($payment as $item)
                                        <tr>
                                            <th scope="row">#{{$item->reference}}</th>
                                            <td>
                                                <div>
                                                    {{\App\Models\Student::where('id', $item->student_id)->first()->name}}
                                                </div>
                                            </td>
                                            <td>{{$item->type}}</td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{$item->created_at->format('d/m/Y')}}</td>
                                            <td><span class="badge bg-success">Paid</span></td>

                                        </tr>
                                    @endforeach
                                @else

                                    <tr>
                                        <th scope="row"></th>
                                        <td>

                                        </td>
                                        <td>Nothing Found</td>
                                        <td></td>
                                        <td></td>

                                    </tr>
                                @endif

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
