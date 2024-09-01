<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class CashierMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

          if (auth()->user()->hasPermission('banned'))
        {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('login')->with('alert', 
            ['type' => 'success',  'message' => 'ليس لديك صلاحية الدخول']);
        }

        if (!auth()->check() || !auth()->user()->hasPermission('browse_cashier'))
        {
            Auth::guard('web')->logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return Redirect::route('login')->withErrors(['success'=>'ليس لديك صلاحية الدخول']);
            // return redirect('login')->session()->flash('success', 'ليس لديك صلاحية الدخول');

        }

        
      
        

        return $next($request);
    }
}
