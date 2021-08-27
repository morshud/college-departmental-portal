<?php

use App\Http\Controllers\Auth\AdminLoginController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\FeeController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin/login', function () {
    return view('admin.auth.login');
})->name('admin.login');
Route::post('admin/auth', [AdminLoginController::class, 'LoginAuth'])->name('admin.auth');
Route::get('admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/student', [DashboardController::class, 'Student'])->name('admin.student');
    Route::get('/lecturer', [DashboardController::class, 'Lecturer'])->name('admin.lecturer');
    Route::get('/course', [DashboardController::class, 'Course'])->name('admin.course');
    Route::get('/event', [EventController::class, 'index'])->name('admin.event');
    Route::get('/news', [DashboardController::class, 'News'])->name('admin.news');
    Route::get('/level', [DashboardController::class, 'Level'])->name('admin.level');
    Route::get('/department', [DashboardController::class, 'Department'])->name('admin.department');
    Route::get('/session', [DashboardController::class, 'Session'])->name('admin.session');
    Route::get('/semester', [DashboardController::class, 'Semester'])->name('admin.semester');
    Route::get('/payment', [DashboardController::class, 'Payment'])->name('admin.payment');
    Route::get('/fee', [DashboardController::class, 'Fee'])->name('admin.fee');
    Route::get('/timetable', [ExamController::class, 'index'])->name('admin.timetable');
});

//Store and Edit
Route::get('create_timetable', [ExamController::class, 'create'])->name('timetable.create');
Route::post('add_timetable', [ExamController::class, 'store'])->name('timetable.store');
Route::get('edit_timetable/{id}', [ExamController::class, 'edit'])->name('timetable.edit');
Route::post('update_timetable/{id}', [ExamController::class, 'update'])->name('timetable.update');
Route::get('destroy_timetablet/{id}', [ExamController::class, 'destroy'])->name('timetable.destroy');

Route::post('add_student', [StudentController::class, 'store'])->name('student.store');
Route::get('edit_student/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::post('update_student/{id}', [StudentController::class, 'update'])->name('student.update');
Route::get('destroy_student/{id}', [StudentController::class, 'destroy'])->name('student.destroy');

Route::post('add_event', [EventController::class, 'store'])->name('event.store');
Route::get('edit_event/{id}', [EventController::class, 'edit'])->name('event.edit');
Route::get('show_event/{id}', [EventController::class, 'show'])->name('event.show');
Route::post('update_event/{id}', [EventController::class, 'update'])->name('event.update');
Route::get('destroy_event/{id}', [EventController::class, 'destroy'])->name('event.destroy');

Route::post('add_fee', [FeeController::class, 'store'])->name('fee.store');
Route::get('edit_fee/{id}', [FeeController::class, 'edit'])->name('fee.edit');
Route::post('update_fee/{id}', [FeeController::class, 'update'])->name('fee.update');
Route::get('destroy_fee/{id}', [FeeController::class, 'destroy'])->name('fee.destroy');


Route::post('add_course', [CourseController::class, 'store'])->name('course.store');
Route::get('edit_course/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::post('update_course/{id}', [CourseController::class, 'update'])->name('course.update');
Route::get('destroy_course/{id}', [CourseController::class, 'destroy'])->name('course.destroy');

Route::post('add_department', [DepartmentController::class, 'store'])->name('department.store');
Route::get('edit_department/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
Route::post('update_department/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::get('destroy_department/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');

Route::post('add_session', [SessionController::class, 'store'])->name('session.store');
Route::get('edit_session/{id}', [SessionController::class, 'edit'])->name('session.edit');
Route::post('update_session/{id}', [SessionController::class, 'update'])->name('session.update');
Route::get('destroy_session/{id}', [SessionController::class, 'destroy'])->name('session.destroy');

Route::post('add_semester', [SemesterController::class, 'store'])->name('semester.store');
Route::get('edit_semester/{id}', [SemesterController::class, 'edit'])->name('semester.edit');
Route::post('update_semester/{id}', [SemesterController::class, 'update'])->name('semester.update');
Route::get('destroy_semester/{id}', [SemesterController::class, 'destroy'])->name('semester.destroy');

Route::post('add_level', [LevelController::class, 'store'])->name('level.store');
Route::get('edit_level/{id}', [LevelController::class, 'edit'])->name('level.edit');
Route::post('update_level/{id}', [LevelController::class, 'update'])->name('level.update');
Route::get('destroy_level/{id}', [LevelController::class, 'destroy'])->name('level.destroy');

Route::post('add_lecturer', [LecturerController::class, 'store'])->name('lecturer.store');
Route::get('edit_lecturer/{id}', [LecturerController::class, 'edit'])->name('lecturer.edit');
Route::post('update_lecturer/{id}', [LecturerController::class, 'update'])->name('lecturer.update');
Route::get('destroy_lecturer/{id}', [LecturerController::class, 'destroy'])->name('lecturer.destroy');

