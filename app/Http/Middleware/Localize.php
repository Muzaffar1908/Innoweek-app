<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class Localize
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
        if (\Session::has('locale')) {
            \App::setlocale(\Session::get('locale'));
            Carbon::setUTF8(true);
            Carbon::setLocale(\App::currentLocale());
            setlocale(LC_TIME, \App::currentLocale());
            //dd(Carbon::getLocale());

        }
        return $next($request);
    }
}
