<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
   public function handle($request, \Closure $next, ...$roles)
{
    if (!Auth::check()) return redirect('/login');

    if (!in_array(Auth::user()->role, $roles)) {
        abort(403, 'Akses ditolak.');
    }

    return $next($request);
}
    public function terminate($request, Response $response)
    {
     
}
}
