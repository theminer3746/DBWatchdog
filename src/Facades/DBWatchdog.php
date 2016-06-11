<?php namespace TriamUdom\DBWatchdog\Facades;

use Illuminate\Support\Facades\Facade;

class DBWatchdog extends Facade
{
    /**
     * Get a schema builder instance for the default connection.
     *
     * @return \Jenssegers\Rollbar\RollbarLogHandler
     */
    protected static function getFacadeAccessor()
    {
        return 'TriamUdom\DBWatchdog\DBWatchdog';
    }
}
