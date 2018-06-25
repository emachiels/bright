<?php

namespace App\Http\Middleware;

use Closure;

class CheckIp
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
        $ips = ['127.0.0.1', '94.215.71.134', '217.123.218.198', '84.87.17.75', '82.73.166.233']; //Lokaal, Schutstal, Miguel, Arjen, Denise

        if(in_array($request->ip(), $ips)) {
            return $next($request);
        }
        else {
            exit('No Permissions');
        }
    }
}
