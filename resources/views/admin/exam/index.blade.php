@extends('admin.layouts.app')

@section('title', 'Exam Time Table')

@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Time Table</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to CUCSD Dashboard</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="">
                        <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#addExam">
                            <i class="mdi mdi-account-check-outline me-2"></i> Schedule Time-Table
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        use \Carbon\Carbon;
    @endphp
    <!-- end page title -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title mb-4">Exam Timetable for
                    {{\App\Models\Semester::where('current', 'Yes')->first()->name}} {{\App\Models\Session::where('current', 'Yes')->first()->name}}</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Invigilator</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $exam = \App\Models\Exam::where('semester', \App\Models\Semester::where('current', 'Yes')->first()->name)->where('session', \App\Models\Session::where('current', 'Yes')->first()->name)->get();
                                @endphp
                                @if (count($exam) > 0)
                                    @foreach ($exam as $item)
                                        @php
                                            $startTime = Carbon::parse($item->time_from);
                                            $finishTime = Carbon::parse($item->time_to);
                                        @endphp
                                        <tr>
                                            <td>
                                                <div>
                                                    {{Carbon::parse($item->date)->isoFormat('ddd')}} <br>
                                                    {{Carbon::parse($item->date)->isoFormat('DD/MM/YYYY')}}

                                                </div>
                                            </td>
                                            <td>{{Carbon::parse($item->time_from)->isoFormat('h:mm a')}} <br>
                                                 - {{Carbon::parse($item->time_to)->isoFormat('h:mm a')}}
                                            </td>
                                            <td>{{$finishTime->diffInRealHours($startTime)}} Hours</td>
                                            <td>{{$item->course}}</td>
                                            <td>{{$item->level}}</td>
                                            <td>{{$item->hall}}</td>
                                            <td>{{$item->invigilator}}</td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" onclick="edit_exam('{{$item->id}}')" class="btn btn-outline-dark btn-sm">
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

    <div class="modal fade text-left" id="edit-exam-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit Time-Tabel</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                    </button>
                </div>

                <div class="modal-body" id="edit_modal_body">

                </div>

            </div>
        </div>
    </div>
    @include('admin.exam.create')

@endsection
