<?php

namespace App\Providers;

use Filament\Support\Assets\Js;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentAsset;

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
        FilamentAsset::register([
        // Local asset build using Vite
        Js::make('sweetalert2', Vite::asset('resources/js/sweetalert2.js')),

        // Or via CDN
        Js::make('sweetalert2', 'https://cdn.jsdelivr.net/npm/sweetalert2@11'),
    ]);
    }
}
