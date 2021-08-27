<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\LecturerCourse;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->course_code = $request->code;
        $course->course_title = $request->title;
        $course->course_unit = $request->unit;
        $course->semester = $request->semester;
        $course->level = $request->level;
        $save = $course->save();
        if ($save) {
            return redirect()->back()->with('success', 'Course has been add successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['course_data'] = Course::findOrFail($id);
        return view('admin.course.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $level
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->course_code = $request->code;
        $course->course_title = $request->title;
        $course->course_unit = $request->unit;
        $course->semester = $request->semester;
        $course->level = $request->level;
        $course->lecturer_incharge = $request->lecturer_incharge;
        $course->phone_number = $request->phone_number;
        $save = $course->save();
        if ($save) {
            $lect = new LecturerCourse();
            $lect->lecturer_id = $request->lecturer_incharge;
            $lect->course_id = $id;
            $saved = $lect->save();
            if($saved){
                return redirect()->back()->with('success', 'Course has been add successfully');
            }
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
        if ($save) {
            return redirect()->back()->with('success', 'Department has been add successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
