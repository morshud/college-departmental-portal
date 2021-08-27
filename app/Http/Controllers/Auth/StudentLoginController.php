<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentLoginController extends Controller
{
    public function LoginAuth(Request $request)
    {
        $this->validator($request);

        $credentials = $request->only('matric', 'password');

        if (Auth::guard('student')->attempt($credentials)) {

            return redirect()
                ->intended(route('student.dashboard'))
                ->with('status', 'You are Logged in as Admin!');
            dd($credentials);
        }

        //Authentication failed...
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect()
            ->route('student.login')
            ->with('status', 'Student has been logged out!');
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'matric'    => 'required|exists:students|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'matric.exists' => 'These matric you input do not match our records!',
        ];

        //validate the request.
        $request->validate($rules, $messages);
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Oppes! You have entered invalid credentials');
    }
}
