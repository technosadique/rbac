<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LeadModuleAccess
{
    public function handle($request, Closure $next)
    {
        if (!in_array(auth()->user()->role, [
            'super_admin','org_admin','org_sales'
        ])) {
            abort(403);
        }

        return $next($request);
    }
}

