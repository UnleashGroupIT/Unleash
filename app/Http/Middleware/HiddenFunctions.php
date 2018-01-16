<?php

namespace App\Http\Middleware;

use App\User;
use Closure;

class HiddenFunctions
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
        if($request->user()->user_level> 1){
             return response('Unauthorized Request', 403);

        }
        return $next($request);
    }
}
