<?php

use App\Http\Controllers\Auth\StudentLoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StudentController;
use App\Models\Payment;
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


Route::get('student/login', [StudentController::class, 'login'])->name('student.login');
Route::post('student/auth', [StudentLoginController::class, 'LoginAuth'])->name('student.auth');
Route::get('student/logout', [StudentLoginController::class, 'logout'])->name('student.logout');
Route::prefix('student')->middleware('auth:student')->group(function () {
    Route::get('/portal', [StudentController::class, 'index'])->name('student.dashboard');
    Route::get('/student_profile', [StudentController::class, 'Profile'])->name('student.profile');
    Route::get('/student_setting', [StudentController::class, 'show'])->name('student.setting');
    Route::get('/event', [StudentController::class, 'Event'])->name('student.event');
    Route::get('/timetable', [StudentController::class, 'Timetable'])->name('student.timetable');
    Route::get('/course', [StudentController::class, 'Course'])->name('student.course');
    Route::get('add_course/{id}', [StudentController::class, 'addCourse'])->name('student.add_course');
    Route::get('invoices', [PaymentController::class, 'invoice'])->name('student.invoices');
    Route::get('/{id}', function ($id) {
        $payment = Payment::where('id', $id)->first();
        return view('student.invoice', compact('payment'));
    })->name('student.invoice');
});

// Paystack Payment
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);



