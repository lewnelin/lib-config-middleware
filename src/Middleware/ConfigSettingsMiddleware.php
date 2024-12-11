<?php

namespace SeuNamespace\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomainOrSubdomain;


class ConfigSettingsMiddleware extends InitializeTenancyByDomainOrSubdomain
{
    public function handle(Request $request, Closure $next)
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