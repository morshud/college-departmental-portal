@extends('student.layouts.app')
@section('title', 'Portal')
@section('content')

    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <!-- My Profile -->
            <div class="col-xl-3 col-lg-6 col-md-5 col-sm-12 layout-spacing">

                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="">My Info</h3>
                            <a href="#" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                        </div>
                        <div class="text-center user-info">
                            <img src="assets/img/90x90.jpg" alt="avatar">
                            <p class="">{{Auth::guard('student')->user()->name}}</p>
                        </div>
                        <div class="user-info-list">

                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>{{Auth::guard('student')->user()->matric}}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>{{Auth::guard('student')->user()->email}}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>{{Auth::guard('student')->user()->phone_number}}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{Auth::guard('student')->user()->gender}}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>{{Auth::guard('student')->user()->level}}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="tableCheckbox" class="col-xl-9 col-lg-6 col-md-5 col-sm-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Payment</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                <thead>
                                    <tr>
                                        <th class="">#</th>
                                        <th class="">Payment Description</th>
                                        <th class="">Amount (₦)</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $fee = App\Models\Fee::all();
                                        $c_sec = App\Models\Session::Where('current', 'Yes')->first();
                                    @endphp
                                    @foreach ($fee as $item)
                                        <tr>
                                            <td>
                                                <p class="mb-0">{{$item->id}}</p>
                                            </td>
                                            <td>{{$c_sec->name}} {{$item->type}}</td>
                                            <td>₦{{$item->amount}}</td>
                                        @if (count($paid) > 0)
                                            @foreach ($paid as $items)
                                            @if ($items->type == $item->type && $items->status == '1')
                                                <td class="text-center">
                                                    <span class="badge badge-success">Paid</span>
                                                    <a href="{{route('student.invoice', $items->id)}}" class="badge badge-success">Print</a>

                                                </td>

                                            @endif

                                            @endforeach

                                        @else
                                            <td class="text-center">

                                                <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                                    @csrf
                                                    <input type="hidden" name="email" value="{{Auth::guard('student')->user()->email}}"> {{-- required --}}
                                                    <input type="hidden" name="amount" value="{{$item->amount + $item->charges}}00">
                                                    <input type="hidden" name="orderId" value="{{Auth::guard('student')->user()->id}}">
                                                    <input type="hidden" name="phone" value="{{Auth::guard('student')->user()->phone_number}}">
                                                    <input type="hidden" name="currency" value="NGN">
                                                    <button type="submit" class="btn btn-info">Pay Now</button>
                                                </form>
                                            </td>
                                        @endif

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">

                <div class="widget widget-activity-four">

                    <div class="widget-heading">
                        <h5 class="">News/Event</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">
                                @php
                                    use \Carbon\Carbon;
                                    $event = \App\Models\Event::orderBy('id', 'desc')->paginate(10);
                                @endphp
                                @if (count($event) > 0)
                                    @foreach ($event as $item)
                                        <div class="item-timeline timeline-primary">
                                            <div class="t-dot" data-original-title="" title="">
                                            </div>
                                            <div class="t-text">
                                                <p>{{$item->title}}</p>
                                                <p class="t-time">{{Carbon::parse($item->created_at)->diffForHumans()}}</p>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="tm-action-btn">
                            <a href="{{route('student.event')}}" class="btn"><span>View All</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tableCheckbox" class="col-xl-8 col-lg-6 col-md-5 col-sm-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Payment History</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                <thead>
                                    <tr>
                                    <th scope="col">(#) Id</th>
                                    <th scope="col">Type</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th class="text-center">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $payment = \App\Models\Payment::orderBy('id', 'desc')->where('student_id', Auth::guard('student')->user()->id)->get();
                                    @endphp
                                    @if (count($payment) > 0)
                                        @foreach ($payment as $item)
                                            <tr>
                                                <th scope="row">#{{$item->id}}</th>
                                                <td>{{$item->type}}</td>
                                                <td>₦{{$item->amount}}</td>
                                                <td>{{$item->created_at->format('d/m/Y')}}</td>
                                                <td>
                                                    <span class="badge bg-success">Paid</span>
                                                    <a href="{{route('student.invoice', $items->id)}}" class="badge badge-success">Print</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
