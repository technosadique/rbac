<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OrgAccessMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if (!$user) {
            abort(401, 'Unauthenticated');
        }

        // Super admin can access all organizations
        if ($user->role === 'super_admin') {
            return $next($request);
        }

        /*
         * Expected org_id sources:
         * - Route parameter: /organizations/{org}
         * - Request input: org_id
         */
        $requestedOrgId =
            $request->route('org') ??
            $request->route('org_id') ??
            $request->input('org_id');

        if ($requestedOrgId && (int) $requestedOrgId !== (int) $user->org_id) {
            abort(403, 'Access denied to this organization');
        }

        return $next($request);
    }
}
