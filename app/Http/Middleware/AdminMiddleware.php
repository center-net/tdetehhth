<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        

        if (auth()->user()->hasPermission('banned'))
        {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('login')->session()->flash('success', 'ليس لديك صلاحية الدخول');

        }
        if (!auth()->check() || !auth()->user()->hasPermission('browse_admin') )
                {
                    return redirect('sale');
                }

        return $next($request);
    }
}