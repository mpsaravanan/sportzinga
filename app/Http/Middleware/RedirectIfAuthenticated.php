<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //header('Accept: application/json');

        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        if(strcasecmp($request->header('x-token-client'),"sportzinga.Desktop") == 0){
            return $next($request);
        }else {
            //return response('Invalid or Missing token provider.', 401);
            return $next($request);
        }

        
    }
}
