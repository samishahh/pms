<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()){
            return redirect('/');
        }
        $userrole=Auth::user()->role;
        if ($userrole==1){
            return redirect()->route('superadmin.dashboard');
        }
        elseif ($userrole==2){
            return $next($request);
        }
        elseif ($userrole==3){
            return redirect()->route('user.dashboard');
        }
        else{
            return redirect('/error');
        }
    }
}
