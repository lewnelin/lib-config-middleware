<?php

namespace Lewnelin\LibConfigMiddleware\Middleware;

use Closure;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;
use Stancl\Tenancy\Middleware\InitializeTenancyBySubdomain;

class ConfigSettingsMiddleware extends InitializeTenancyByDomainOrSubdomain
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
        $response = parent::handle($request, $next);

        $tenant = tenant();
        if (!$tenant || !$tenant->active) {
            return response()->json(['message' => 'Serviço suspenso. Contate a prefeitura.'], 403);
        }

        return $response;
    }
}
