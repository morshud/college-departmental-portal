@extends('lecturer.layouts.app')

@section('title', 'My Course')

@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">

            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Title</th>
                                <th>Unit</th>
                                <th>Lecturer</th>
                                <th>Phone Number</th>
                                <th class="">Semester/Level</th>
                            </tr>
                        </thead>
                        @php
                            $lec_c = \App\Models\LecturerCourse::where('lecturer_id', Auth::guard('lecturer')->user()->id)->get();
                            foreach ($lec_c as $key => $value) {
                                $lec = $value->course_id;
                            }
                            $course = \App\Models\Course::where('id', $lec)->get();
                        @endphp
                        <tbody>
                            @foreach ($course as $item)
                                <tr>
                                    <td>{{$item->course_code}}</td>
                                    <td>{{$item->course_title}}</td>
                                    <td>{{$item->course_unit}}</td>
                                    @php
                                        $lect = \App\Models\Lecturer::where('id', $item->lecturer_incharge)->first()
                                    @endphp
                                    <td>{{$lect->name}}</td>
                                    <td>{{$lect->phone}}</td>
                                    <td class="">
                                        {{$item->semester}}/{{$item->level}}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>
@endsection
