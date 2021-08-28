@extends('lecturer.layouts.app')

@section('title', 'My Students')

@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Matric</th>
                                <th>Level</th>
                                <th>Gender</th>
                                <th>Phone Number</th>
                                <th class="text-center dt-no-sorting">Year Admitted</th>
                                <th class="text-center dt-no-sorting">Department</th>
                            </tr>
                        </thead>
                        @php
                            $lec_c = \App\Models\LecturerCourse::where('lecturer_id', Auth::guard('lecturer')->user()->id)->get();
                            foreach ($lec_c as $key => $value) {
                                $lec = $value->course_id;
                            }
                        @endphp
                        @php

                            $my_student = \App\Models\StudentCourse::where('course_id', $lec)->get();
                            if (count($my_student)) {
                                foreach ($my_student as $key => $value) {
                                    $stud = $value->student_id;
                                }
                                $student = \App\Models\Student::where('id', $stud)->get();
                            }
                            else {
                                $student = '';
                            }
                        @endphp
                        <tbody>
                            @if ($student !== '')
                                @if (count($student))
                                    @foreach ($student as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->matric}}</td>
                                            <td>{{$item->level}}</td>
                                            <td>{{$item->gender}}</td>
                                            <td>{{$item->phone_number}}</td>
                                            <td>
                                                {{$item->session}}
                                            </td>
                                            <td> {{$item->department}} </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Nothing Found</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                @endif
                            @else
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Nothing found</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endif


                        </tbody>
                        {{-- <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Matric</th>
                                <th>Level</th>
                                <th>Gender</th>
                                <th>Phone Number</th>
                                <th class="text-center">Year Admitted</th>
                                <th class="text-center">Department</th>
                            </tr>
                        </tfoot> --}}
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
