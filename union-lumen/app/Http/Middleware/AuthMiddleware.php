<?php
namespace App\Http\Middleware;

use Closure;

class AuthMiddleware
{
    public function handle($request, Closure $next)
    {
        if (! \Session::get('logged_in')) { // Použij plný namespace
            return redirect('/login');
        }

        return $next($request);
    }
}
