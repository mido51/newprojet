<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use App\User;

use Closure;

class CheckUser
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

        if (!Auth::check()) {
        return redirect('/login_client');
        }
        return $next($request);
    }
}
