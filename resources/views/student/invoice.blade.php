

@extends('student.layouts.app')
@section('title', 'Payment Invoice')

@section('content')

<div class="layout-px-spacing">
    <div class="row invoice layout-top-spacing layout-spacing">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            
            <div class="doc-container">

                <div class="row">

                    <div class="col-xl-9">

                        <div class="invoice-container">
                            <div class="invoice-inbox">
                                
                                <div id="ct" class="">
                                    
                                    <div class="invoice-00001">
                                        <div class="content-section">

                                            <div class="inv--head-section inv--detail-section">
                                            
                                                <div class="row">
                                                
                                                    <div class="col-sm-6 col-12 mr-auto">
                                                        <div class="d-flex">
                                                            <img class="company-logo" src="assets/img/cork-logo.png" alt="company">
                                                            <h3 class="in-heading align-self-center">Crescent University.</h3>
                                                            
                                                        </div>
                                                        <p class="in-heading ml-5">Computer Science</p>
                                                    </div>

                                                    <div class="col-sm-6 text-sm-right">
                                                        <p class="inv-list-number"><span class="inv-title">Invoice : </span> <span class="inv-number">#{{$payment->reference}}</span></p>
                                                    </div>

                                                    <div class="col-sm-6 align-self-center mt-3">
                                                        <p class="inv-street-addr">XYZ Delta Street</p>
                                                        <p class="inv-email-address">info@company.com</p>
                                                        <p class="inv-email-address">(120) 456 789</p>
                                                    </div>
                                                    <div class="col-sm-6 align-self-center mt-3 text-sm-right">
                                                        <p class="inv-created-date"><span class="inv-title">Invoice Date : </span> <span class="inv-date">{{$payment->created_at->format('d M Y')}}</span></p>
                                                        {{-- <p class="inv-due-date"><span class="inv-title">Due Date : </span> <span class="inv-date">26 Aug 2020</span></p> --}}
                                                    </div>
                                                
                                                </div>
                                                
                                            </div>

                                            <div class="inv--detail-section inv--customer-detail-section">

                                                <div class="row">

                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                        <p class="inv-to">Invoice To</p>
                                                    </div>

                                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 inv--payment-info">
                                                        <h6 class=" inv-title">Payment Info:</h6>
                                                    </div>
                                                    
                                                    <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                        <p class="inv-customer-name">{{Auth::guard('student')->user()->name}}</p>
                                                        <p class="inv-street-addr">{{Auth::guard('student')->user()->matric}}</p>
                                                        <p class="inv-email-address">{{Auth::guard('student')->user()->phone_number}}</p>
                                                        <p class="inv-email-address">{{Auth::guard('student')->user()->department}}</p>
                                                        <p class="inv-email-address">{{Auth::guard('student')->user()->level}}</p>
                                                    </div>
                                                    
                                                    <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1">
                                                        <div class="inv--payment-info">
                                                            <p><span class=" inv-subtitle">Gateway:</span> <span>Paystack</span></p>

                                                        </div>
                                                    </div>

                                                </div>
                                                
                                            </div>
                                            @php
                                                $c_semester = \App\Models\Semester::where('current', 'Yes')->first();
                                                $c_session = \App\Models\Session::where('current', 'Yes')->first();
                                            @endphp
                                            <div class="inv--product-table-section">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead class="">
                                                            <tr>
                                                                <th scope="col">S.No</th>
                                                                <th scope="col">Type</th>
                                                                <th scope="col">Session</th>
                                                                <th scope="col">Semester</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>{{$payment->type}}</td>
                                                                <td>{{$c_session->name}}</td>
                                                                <td>{{$c_semester->name}}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            
                                            <div class="inv--total-amounts">
                                            
                                                <div class="row mt-4">
                                                    <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                    </div>
                                                    <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                        <div class="text-sm-right">
                                                            <div class="row">
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Due: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">₦{{$payment->amount}}</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class="">Portal Maintenance: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">₦{{$payment->charges - 6.67}}</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7">
                                                                    <p class=" discount-rate">Charges: </p>
                                                                </div>
                                                                <div class="col-sm-4 col-5">
                                                                    <p class="">₦{{$payment->charges - 100}}</p>
                                                                </div>
                                                                <div class="col-sm-8 col-7 grand-total-title">
                                                                    <h4 class="">Total Paid: </h4>
                                                                </div>
                                                                <div class="col-sm-4 col-5 grand-total-amount">
                                                                    <h4 class="">₦{{$payment->charges + str_replace(',', '', $payment->amount)}}</h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="inv--note">

                                                <div class="row mt-4">
                                                    <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                        <p>Note: Covenant University Computer Science Department - NACOSS</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div> 
                                    
                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="col-xl-3">

                        <div class="invoice-actions-btn">

                            <div class="invoice-action-btn">

                                <div class="row">
                                    <div class="col-xl-12 col-md-3 col-sm-6">
                                        <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>


                </div>
                
                
            </div>

        </div>
    </div>
</div>

@endsection