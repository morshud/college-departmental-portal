@extends('admin.layouts.app')

@section('title', 'Lecturer')

@section('content')
    <!-- start page title -->
    <div class="page-title-box">
        <div class="row align-items-center">
            <div class="col-md-8">
                <h6 class="page-title">Lecturer</h6>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to CUCSD Dashboard</li>
                </ol>
            </div>
            <div class="col-md-4">
                <div class="float-end d-none d-md-block">
                    <div class="">
                        <button class="btn btn-primary " type="button" data-bs-toggle="modal" data-bs-target="#addLecturer">
                            <i class="mdi mdi-account-check-outline me-2"></i> Add Lecturer
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
                    <h4 class="card-title mb-4">Lecturers</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Department</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Pnone Number</th>
                                    <th scope="col" colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $lecturer = \App\Models\Lecturer::all();
                                @endphp
                                @if (count($lecturer) > 0)
                                    @foreach ($lecturer as $item)
                                        <tr>
                                            <td>
                                                <div>
                                                    {{$item->name}}
                                                </div>
                                            </td>
                                            <td>{{$item->department}}</td>
                                            <td>{{$item->gender}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->phone}}</td>
                                            <td>
                                                <div>
                                                    <a href="javascript: void(0);" onclick="edit_lecturer('{{$item->id}}')" class="btn btn-outline-dark btn-sm">
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

    <div class="modal fade text-left" id="edit-lecturer-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Edit Lecturer</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                </div>

                <div class="modal-body" id="edit_modal_body">

                </div>

            </div>
        </div>
    </div>
    @include('admin.modal.add_lecturer')


@endsection
