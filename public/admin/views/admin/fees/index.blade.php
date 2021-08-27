@extends('admin.layouts.app')

@section('title', 'Fee')

@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Fee</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to CUCSD Dashboard</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="">
                        <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#addFee">
                            <i class="mdi mdi-account-check-outline me-2"></i> Add Fee
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Fees</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Charges</th>
                                    <th scope="col" colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $fee = \App\Models\Fee::all();
                                @endphp
                                @if (count($fee) > 0)
                                    @foreach ($fee as $item)
                                        <tr>
                                            <td>
                                                <div>
                                                    {{$item->type}}
                                                </div>
                                            </td>
                                            <td>{{$item->amount}}</td>
                                            <td>{{$item->charges}}</td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" onclick="edit_fee('{{$item->id}}')" class="btn btn-outline-dark btn-sm">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    {{-- <a href="javascript: void(0);" class="btn btn-light btn-sm">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </a> --}}
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                @else
                                    <tr>
                                        <th scope="row">Nothing found</th>
                                    </tr>
                                @endif
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="modal fade text-left" id="edit-fee-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit Fee</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                    </button>
                </div>

                <div class="modal-body" id="edit_modal_body">

                </div>

            </div>
        </div>
    </div>
    @include('admin.modal.add_fee')

@endsection
