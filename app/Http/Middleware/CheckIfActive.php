<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfActive
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
        if(auth()->check() && !auth()->user()->hasRole('Admin'))
        {
            if(!auth()->user()->active)
            {
                Auth::logout();
    
                $request->session()->invalidate();
    
                $request->session()->regenerateToken();
    
                return redirect()->route('login')->with('error', 'Your Account is yet to be approved. You will be notified as soon as it is approved');
            }
        }
            
        return $next($request);
    }
    // public function handle(Request $request, Closure $next)
    // {
        
    //         if(auth()->check() && !auth()->user()->active)
    //         {
    //             Auth::logout();
    
    //             $request->session()->invalidate();
    
    //             $request->session()->regenerateToken();
    
    //             return redirect()->route('login')->with('error', 'Your Account is yet to be approved. You will be notified as soon as it is approved');
    //         }
        
    //     return $next($request);
    // }
}
