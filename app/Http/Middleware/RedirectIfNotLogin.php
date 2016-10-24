<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class RedirectIfNotLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = 'admin')
    {
        if(!Auth::guard($guard)->check()){
            $url = $request->url();
            return redirect()->route('get.admin.login', ['token' => csrf_token(), 'url' => $url]);
        }
        return $next($request);
    }
}
