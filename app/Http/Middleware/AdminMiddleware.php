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
        if(Auth::check()){
            if(Auth::user()->roll=="1"){
                return $next($request);
            }
            else {
                return redirect('/mobile-v/register')->with('massage',"Siz admin emassiz");
            }
        }
        else {
            return redirect('/signin')->with('massage',"Siz ro'yhatdan o'tmagansiz");
        }

    }
}
