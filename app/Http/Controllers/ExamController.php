<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.exam.index');
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
        $exam = new Exam();
        $exam->course = $request->course;
        $exam->level = $request->level;
        $exam->department = $request->department;
        $exam->invigilator = $request->invigilator;
        $exam->session = $request->session;
        $exam->semester = $request->semester;
        $exam->date = $request->date;
        $exam->time_from = $request->time_from;
        $exam->time_to = $request->time_to;
        $exam->hall = $request->venue;
        $save = $exam->save();
        if ($save) {
            return redirect()->back()->with('success', 'Exam has been successfully scheduled');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['exam_data'] = Exam::findOrFail($id);
        return view('admin.exam.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $exam = Exam::findOrFail($id);
        $exam->course = $request->course;
        $exam->level = $request->level;
        $exam->invigilator = $request->invigilator;
        $exam->date = $request->date;
        $exam->time_from = $request->time_from;
        $exam->time_to = $request->time_to;
        $exam->hall = $request->venue;
        $save = $exam->save();
        if ($save) {
            return redirect()->back()->with('success', 'Exam has been updated successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
    }
}
