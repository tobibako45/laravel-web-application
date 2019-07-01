<?php

namespace App\Providers;

use App\Services\CalculationService;
use Illuminate\Support\ServiceProvider;

class CalculationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Calculation', function($app){
            return new CalculationService();
        }
        );
    }
}
