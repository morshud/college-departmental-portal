<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminLoginController extends Controller
{
    public function LoginAuth(Request $request)
    {
        $this->validator($request);

        $credentials = $request->only('username', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {

            return redirect()
                ->intended(route('admin.dashboard'))
                ->with('status', 'You are Logged in as Admin!');
        }

        //Authentication failed...
        return $this->loginFailed();

    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()
        ->route('admin.login')
        ->with('status', 'Admin has been logged out!');
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'username'    => 'required|exists:admins|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'username.exists' => 'These username you input do not match our records.',
            'password.exists' => 'These password seems incorrect!.'
        ];

        //validate the request.
        $request->validate($rules, $messages);
    }

    private function loginFailed(){
        return redirect()
            ->back()
            ->withInput()
            ->with('error','Login failed, please try again!');
    }
}
