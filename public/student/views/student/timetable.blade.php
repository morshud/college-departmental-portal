@extends('student.layouts.app')

@section('title', 'Time Table')

@section('content')
    <div class="layout-px-spacing">

        <div class="row layout-top-spacing" id="cancel-row">
            @php
                use \Carbon\Carbon;
                $exam = \App\Models\Exam::where('semester', \App\Models\Semester::where('current', 'Yes')->first()->name)->where('session', \App\Models\Session::where('current', 'Yes')->first()->name)->where('level', Auth::guard('student')->user()->level)->get();
            @endphp
            @if (count($exam) > 0)
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="html5-extension" class="table table-hover non-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">Duration</th>
                                    <th scope="col">Course</th>
                                    <th scope="col">Level</th>
                                    <th scope="col">Venue</th>
                                    <th scope="col">Invigilator</th>
                                </tr>
                            </thead>
                            <tbody>
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
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
