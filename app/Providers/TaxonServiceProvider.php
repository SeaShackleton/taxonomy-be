<?php

namespace App\Providers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class TaxonServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\TaxonServiceInterface', 'App\Services\TaxonService');
	}

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
	
}
