<?php

namespace SeuNamespace;

use Illuminate\Support\ServiceProvider;

class MiddlewareServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Torna as migrations publicáveis
        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations'),
        ], 'middleware-migrations');
    }
}
