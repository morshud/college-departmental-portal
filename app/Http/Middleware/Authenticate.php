<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Route;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {

            if (Route::is('student.*')) {
                return route('student.login');
            }
            if (Route::is('lecturer.*')) {
                return route('lecturer.login');
            }
            if (Route::is('admin.*')) {
                return route('admin.login');
            }
            return route('login');
        }
    }
}
