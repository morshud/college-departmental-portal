<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Department;
Use App\Models\Level;
use App\Models\Lecturer;
use App\Models\Session;
use App\Models\Event;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        $course = Course::all();
        $department = Department::all();
        $level = Level::all();
        $lecturer = Lecturer::all();
        $session = Session::all();
        $event = Event::all();
        $payment = Payment::all();
        $admin = Admin::all();
        return view('admin.dashboard',
        compact('student', 'course', 'department', 'level', 'lecturer', 'session', 'event', 'payment', 'admin'));
    }

    //Other Route
    public function Student()
    {
        return view('admin.student.index');
    }

    public function Level()
    {
        return view('admin.level.index');
    }

    public function Session()
    {
        return view('admin.session.index');
    }

    public function Semester()
    {
        return view('admin.semester.index');
    }

    public function Department()
    {
        return view('admin.department.index');
    }

    public function Course()
    {
        return view('admin.course.index');
    }

    public function Event()
    {
        return view('admin.event.index');
    }

    public function Lecturer()
    {
        return view('admin.lecturer.index');
    }

    public function Payment()
    {
        return view('admin.payment.index');
    }

    public function Fee()
    {
        return view('admin.fees.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
