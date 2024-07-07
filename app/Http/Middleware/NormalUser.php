<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class NormalUser
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
            return redirect()->route('admin.dashboard');
        }
        elseif ($userrole==3){
            return $next($request);
        }
        else{
            return redirect('/error');
        }
    }
}
