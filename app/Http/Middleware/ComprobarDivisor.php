<?php

namespace App\Http\Middleware;

use Closure;

class ComprobarDivisor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->divisor=0){
            return redirect('/divisorCero');
        }

    }

}
