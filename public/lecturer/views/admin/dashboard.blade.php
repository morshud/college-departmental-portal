@extends('admin.layouts.app')

@section('title', 'Dashboard')

@section('content')


                <!-- start page title -->
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h6 class="page-title">Dashboard</h6>
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                            </ol>
                        </div>
                        <div class="col-md-4">
                            <div class="float-end d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-cog me-2"></i> Settings
                                    </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <i class="mdi mdi-account-box-multiple me-3"></i>
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-70">Students</h5>
                                    <h4 class="fw-medium font-size-24">{{count($student) ?? '0'}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <i class="mdi mdi-account-tie me-3"></i>
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-70">Lecturer</h5>
                                    <h4 class="fw-medium font-size-24">{{count($lecturer) ?? '0'}} </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <i class="mdi mdi-alpha-c-circle me-3"></i>
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Course</h5>
                                    <h4 class="fw-medium font-size-24">{{count($course) ?? '0'}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stat bg-primary text-white">
                            <div class="card-body">
                                <div class="mb-4">
                                    <div class="float-start mini-stat-img me-4">
                                        <i class="mdi mdi-account me-3"></i>
                                    </div>
                                    <h5 class="font-size-16 text-uppercase text-white-50">Admin</h5>
                                    <h4 class="fw-medium font-size-24">{{count($admin) ?? '0'}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row">
                    <div class="col-xl-7">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-4">Event/News</h4>
                                <ol class="activity-feed">
                                @php
                                    $event = \App\Models\Event::orderBy('id', 'desc')->paginate(10);
                                @endphp
                                @if (count($event) > 0)
                                    @foreach ($event as $item)
                                        <li class="feed-item">
                                            <div class="feed-item-list">
                                                <span class="date">{{$item->created_at->format('M d')}}</span>
                                                <span class="activity-text">{{$item->title}}</span>
                                            </div>
                                        </li>
                                    @endforeach
                                @endif
                                </ol>
                                <div class="text-center">
                                    <a href="{{route('admin.event')}}" class="btn btn-primary">Load More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h4 class="card-title mb-4">Modules</h4>
                                </div>
                                <div class="wid-peity mb-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <p class="text-muted">Level</p>
                                                <h5 class="mb-4">{{count($level) ?? '0'}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="wid-peity mb-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <p class="text-muted">Department</p>
                                                <h5 class="mb-4">{{count($department) ?? '0'}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <p class="text-muted">Session</p>
                                                <h5>{{count($session) ?? '0'}}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->


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
                <!-- end row -->




@endsection
