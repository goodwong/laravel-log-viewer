<?php

namespace Goodwong\LogViewer;

use DB;
use Log;
use Illuminate\Support\ServiceProvider;

class LogViewerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register(\Rap2hpoutre\LaravelLogViewer\LaravelLogViewerServiceProvider::class);
        }
    }
}

