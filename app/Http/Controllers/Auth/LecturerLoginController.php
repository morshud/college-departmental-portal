<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LecturerLoginController extends Controller
{
    public function LoginAuth(Request $request)
    {
        $this->validator($request);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('lecturer')->attempt($credentials)) {

            return redirect()
                ->intended(route('lecturer.dashboard'))
                ->with('status', 'You are Logged in as Admin!');
        }
        //Authentication failed...
        return $this->loginFailed();
    }

    public function logout()
    {
        Auth::guard('lecturer')->logout();
        return redirect()
            ->route('lecturer.login')
            ->with('status', 'Admin has been logged out!');
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|exists:lecturers|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.exists' => 'These email you input do not match our records.',
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
