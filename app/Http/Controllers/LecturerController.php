<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Event;
use App\Models\Lecturer;
use App\Models\LecturerCourse;
use App\Models\Student;
use App\Models\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::guard('lecturer')->user()->id;
        $course = Course::all();
        $student = Student::all();
        $student_course = StudentCourse::all();
        $lecturer_course = LecturerCourse::where('lecturer_id', $user_id)->get();
        return view('lecturer.dashboard', compact('course', 'student', 'student_course', 'lecturer_course'));
    }

    public function Student()
    {
        return view('lecturer.student.student');
    }

    public function MyStudent()
    {
        return view('lecturer.student.my_student');
    }

    public function Course()
    {
        return view('lecturer.course.course');
    }

    public function MyCourse()
    {
        return view('lecturer.course.my_course');
    }

    public function Event()
    {
        $event = Event::orderBy('id', 'desc')->paginate(20);
        return view('lecturer.news.index', compact('event'));
    }

    /* public function News()
    {
        return view('lecturer.news.news');
    } */

    public function ExamSchedule()
    {
        return view('lecturer.exam.index');
    }

    /* public function exam()
    {
        return view('lecturer.exam.invigilating');
    } */

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
        $stud = new Lecturer();
        $stud->name = $request->name;
        $stud->department = $request->department;
        $stud->gender = $request->gender;
        $stud->email = $request->email;
        $stud->phone = $request->phone;
        $stud->password = Hash::make($request->password);

        $save = $stud->save();
        if ($save) {
            return redirect()->back()->with('success', 'Student has been add successfully');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(Lecturer $lecturer)
    {
        $user = Lecturer::findOrFail(Auth::guard('lecturer')->user()->id);
        return view('lecturer.setting', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['lecturer_data'] = Lecturer::findOrFail($id);
        return view('admin.lecturer.edit', $data);
    }

    public function Profile(){
        $user = Lecturer::findOrFail(Auth::guard('lecturer')->user()->id);
        return view('lecturer.profile', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $stud = Lecturer::findOrFail($id);
        $stud->name = $request->name;
        $stud->department = $request->department;
        $stud->gender = $request->gender;
        $stud->email = $request->email;
        $stud->phone = $request->phone;
        $stud->password = Hash::make($request->password);
        $save = $stud->save();
        if ($save) {
            return redirect()->back()->with('success', 'Lecturer has been successfully Updated');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }

    public function updates(Request $request, Lecturer $lecturer)
    {
        $stud = Lecturer::findOrFail(Auth::guard('lecturer')->user()->id);
        $stud->name = $request->name;
        if ($request->department) {
            $stud->department = $request->department;
        }
        $stud->gender = $request->gender;
        $stud->email = $request->email;
        $stud->phone = $request->phone;
        if ($request->password !== '') {
            $stud->password = Hash::make($request->password);
        }
        $stud->bio = $request->bio;
        $stud->address = $request->address;
        $stud->post = $request->rank;
        $stud->title = $request->title;
        $save = $stud->save();
        if ($save) {
            return redirect()->back()->with('success', 'Lecturer has been successfully Updated');
        } else {
            return redirect()->back()->with('error', 'Something went wrong!');
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
