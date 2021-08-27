@extends('admin.layouts.app')

@section('title', 'Course')

@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Course</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to CUCSD Dashboard</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="">
                        <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#addCourse">
                            <i class="mdi mdi-account-check-outline me-2"></i> Add Course
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
                    <h4 class="card-title mb-4">Courses</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Code</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Unit</th>
                                    <th scope="col">Lecturer In Charge</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Semester/Level</th>
                                    <th scope="col" colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $course = \App\Models\Course::all();
                                @endphp
                                @if (count($course) > 0)
                                    @foreach ($course as $item)
                                        <tr>
                                            <td>
                                                <div>
                                                    {{$item->course_code}}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{$item->course_title}}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{$item->course_unit}}
                                                </div>
                                            </td>
                                            <td>
                                                @php
                                                    $lect_name = \App\Models\Lecturer::where('id', $item->lecturer_incharge)->first()
                                                @endphp
                                                <div>
                                                    {{$lect_name->name}}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{$lect_name->phone}}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    {{$item->semester}}/{{$item->level}}
                                                </div>
                                            </td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" onclick="edit_course('{{$item->id}}')" class="btn btn-outline-dark btn-sm">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
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
    <div class="modal fade bs-example-modal-center" id="edit-course-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit Course / Assign Lecturer</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>

                <div class="modal-body" id="edit_modal_body">

                </div>

            </div>
        </div>
    </div>
    @include('admin.modal.add_course')
    
@endsection
