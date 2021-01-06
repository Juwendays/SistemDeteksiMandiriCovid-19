<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekNoTest
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
        if(!session('no_test')){
            return redirect('/biodata');
        }
        return $next($request);
    }
}
