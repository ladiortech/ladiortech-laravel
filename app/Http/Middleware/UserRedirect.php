<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class UserRedirect
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == 'user' && Auth::user()->active == 0) {
            
            Auth::logout();
            return redirect('adminp/login')->with('error','Your account is not active please contact to admin');
        }
        return $next($request);
    }
}
