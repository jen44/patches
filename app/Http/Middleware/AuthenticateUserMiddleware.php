<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AuthenticateUserMiddleware
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
        
     
        if(Auth::user()->id != $request->route('id')){
        // not the right user
            return redirect('noaccess');
        
        } else {
            
            return $next($request);
        
        }
    }
}
