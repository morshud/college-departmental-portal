<?php

use App\Http\Controllers\Auth\LecturerLoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\LecturerController;
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

Route::get('/lecturer/login', function () {
    return view('lecturer.auth.login');
})->name('lecturer.login');
Route::post('lecturer/auth', [LecturerLoginController::class, 'LoginAuth'])->name('lecturer.auth');
Route::get('lecturer/logout', [LecturerLoginController::class, 'logout'])->name('lecturer.logout');
Route::prefix('lecturer')->middleware('auth:lecturer')->group(function () {
    Route::get('/dashboard', [LecturerController::class, 'index'])->name('lecturer.dashboard');
    Route::get('/my_student', [LecturerController::class, 'MyStudent'])->name('lecturer.my_student');
    Route::get('/student', [LecturerController::class, 'Student'])->name('lecturer.student');
    Route::get('/my_course', [LecturerController::class, 'MyCourse'])->name('lecturer.my_course');
    Route::get('/course', [LecturerController::class, 'Course'])->name('lecturer.course');
    Route::get('/event', [LecturerController::class, 'Event'])->name('lecturer.event');
    Route::get('/news', [LecturerController::class, 'News'])->name('lecturer.news');
    Route::get('/exam_schedule', [LecturerController::class, 'ExamSchedule'])->name('lecturer.exam_schedule');
    Route::get('/exam_invigilate', [LecturerController::class, 'ExamInvigilate'])->name('lecturer.exam_invigilate');
    Route::get('/lecturer_profile', [LecturerController::class, 'Profile'])->name('lecturer.profile');
    Route::get('/lecturer_setting', [LecturerController::class, 'show'])->name('lecturer.setting');
    //Route::get('/exam_invigilate', [LecturerController::class, 'ExamInvigilate'])->name('lecturer.exam_invigilate');
});

Route::get('shows_event/{id}', [EventController::class, 'show'])->name('events.show');
Route::post('/update_lecturer', [LecturerController::class, 'updates'])->name('lecturer.updates');
