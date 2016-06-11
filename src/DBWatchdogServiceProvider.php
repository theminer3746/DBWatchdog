<?php namespace TriamUdom\DBWatchdog;

use Illuminate\Support\ServiceProvider;

class DBWatchdogServiceProvider extends ServiceProvider
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
        $this->app->make('DBWatchdog', function(){
            return new DBWatchdog;
        });
    }
}
