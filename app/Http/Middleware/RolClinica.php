<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RolClinica
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
        if( Auth::check() && Auth::user()->rol == 'AC' )
            return $next($request);

        return redirect('/home');
    }
}
