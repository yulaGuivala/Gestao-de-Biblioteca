<?php

namespace App\Http\Middleware;

use Closure;
use Request;

class CheckUserRole
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
        $rep = Request::cookie('Admin');
        
        if ($rep != 'Folege'){

            return redirect('/sgb-admin/login');
        }
       
        return $next($request);
    }
}
