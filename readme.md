Database Watchdog
===============

Database status monitor and data conflict reporter for laravel 5.x up.

Installation
------------

Install using composer:

```
composer require triamudom/dbwatchdog
```

Add the service provider to the `'providers'` array in `config/app.php`:

```php
TriamUdom\DBWatchdog\DBWatchdogServiceProvider::class,
```
