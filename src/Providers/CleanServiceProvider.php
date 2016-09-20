<?php

namespace Syafiq\Clean\Providers;

use Illuminate\Support\ServiceProvider;
use Syafiq\Clean\Console\Commands\CleanUp;

class CleanServiceProvider extends ServiceProvider
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
        //
        $this->commands([
            \Syafiq\Clean\Console\Commands\CleanUp::class
        ]);
    }
}
