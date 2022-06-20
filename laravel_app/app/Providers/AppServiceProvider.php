<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\facades\schema;
use Nette\Schema\Schema as SchemaSchema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // régler la longueur de chaine par défaut, utilisé pour les migrations
        Schema::defaultStringLength(191);
    }
}
