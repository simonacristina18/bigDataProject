<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $student_urls = ["student-profile", "dashboard-student", "change-group", "request-sent", "contact-secretary"];
        $secretary_urls = ["students-table", "dashboard-secretary"];
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if(Auth::user()->role == 'student' && !in_array($request->path(), $student_urls)) {
                    return redirect()->route('dashboard-student');
                } else if(Auth::user()->role == 'secretary' && !in_array($request->path(), $secretary_urls)) {
                    return redirect()->route('dashboard-secretary');
                }
            }
        }

        return $next($request);
    }
}
