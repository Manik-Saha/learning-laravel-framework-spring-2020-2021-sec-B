<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class sessionVerify
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
        if($request->session()->has('email')){
            return $next($request);
        }else{
            $request->session()->flash('msg', 'invalid request...login first!');
            return redirect('/login');
        }
    }
}
