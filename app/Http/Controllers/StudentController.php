<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Lecturer;
use App\Models\LecturerCourse;
use App\Models\Payment;
use App\Models\Semester;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function login()
    {

        return view('student.auth.login');
    }

    /* public function __construct()
    {
        $this->middleware('student.auth');
    } */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user_id = Auth::guard('student')->user()->id;
        $paid = Payment::where('student_id', $user_id)->get();
        $course = Course::all();
        $student = Student::all();
        $student_course = StudentCourse::all();
        $lecturer_course = LecturerCourse::where('lecturer_id', $user_id)->get();
        return view('student.dashboard', compact('course', 'student', 'student_course', 'lecturer_course', 'paid'));
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
        $stud = new Student();
        $stud->name = $request->name;
        $stud->matric = $request->matric;
        $stud->level = $request->level;
        $stud->department = $request->department;
        $stud->gender = $request->gender;
        $stud->phone_number = $request->phone;
        $stud->email = $request->email;
        $stud->session = $request->session;
        $stud->password = Hash::make($request->password);

        $save = $stud->save();
        if($save){
            return redirect()->back()->with('success', 'Student has been add successfully');
        }else{
            return redirect()->back()->with('error', 'Something went wrong!');
        }

    }

    public function Event()
    {
        $event = Event::orderBy('id', 'desc')->paginate(20);
        return view('student.event', compact('event'));
    }

    public function Course()
    {
        $user_id = Auth::guard('student')->user()->id;
        $user_level = Auth::guard('student')->user()->level;
        $semester = Semester::where('current', 'Yes')->get();
        foreach ($semester as $key => $value) {
            $current = $value->name;
        }
        $course = Course::where('level', $user_level)->where('semester', $current)->get();
        return view('student.course', compact('course'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['student_data'] = Student::findOrFail($id);
        return view('admin.student.edit', $data);
    }

    public function addCourse($id)
    {
        $data = Course::findOrFail($id);
        $course = new StudentCourse();
        $course->course_id = $id;
        $course->student_id = Auth::guard('student')->user()->id;
        $save = $course->save();
        if($save){
            return redirect()->back()->with('success', 'Your Course has been registered successfully!');
        }

    }

    public function Timetable()
    {
        return view('student.timetable');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stud = Student::findOrFail($id);
        $stud->name = $request->name;
        $stud->matric = $request->matric;
        $stud->level = $request->level;
        $stud->gender = $request->gender;
        $stud->phone_number = $request->phone;
        $stud->email = $request->email;
        $stud->session = $request->session;
        $stud->password = Hash::make($request->password);
        $save = $stud->save();
        if ($save) {
            return redirect()->back()->with('success', 'Student has been successfully Updated');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
