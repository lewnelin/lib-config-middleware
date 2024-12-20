<?php

namespace Lewnelin\LibConfigMiddleware\Middleware;

use Closure;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;

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
        // Chama o middleware pai para inicializar a tenancy
        parent::handle($request, $next);

        // Verifica o status do cliente
        $tenant = tenant();

        if (!$tenant || !$tenant->active) {
            return response()->json(['message' => 'Serviço suspenso. Contate a prefeitura.'], 403);
        }

        return $next($request);
    }
}
