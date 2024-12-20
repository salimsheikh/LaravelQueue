<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        Schema::defaultStringLength(191); // Restricts default string length to fit within 1000 bytes
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
