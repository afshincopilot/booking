<?php

namespace App\Providers;

use App\Repositories\Client\FlightRepository;
use App\Repositories\Interfaces\Client\FlightRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->bind(FlightRepositoryInterface::class,FlightRepository::class);
    }
}
