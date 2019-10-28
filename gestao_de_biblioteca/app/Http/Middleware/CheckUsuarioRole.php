<?php

namespace App\Http\Middleware;

use Closure;
use Request;

class CheckUsuarioRole
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
        $rep = Request::cookie('user');

        if (!isset($rep)) {
            return redirect('inicio/minha-conta/login');
        }
        return $next($request);
    }
}
