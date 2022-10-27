<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Professor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role == "professor"){
            return $next($request);
        } 
        return redirect()->route('login')->with('error', 'This professor\'s account does not exist. Please contact your school administration.');

        }
    
}
