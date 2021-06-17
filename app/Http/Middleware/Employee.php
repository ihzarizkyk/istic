<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Employee
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $authenticate = (Auth::check() && Auth::user()->level == 2);

        if(!$authenticate)
        {
            return abort(403);
            return redirect()->back();
        }else{
            return $next($request);
        }
    }
}
