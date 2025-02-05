<?php

namespace Ips\LoginTracker;

use Illuminate\Support\ServiceProvider;
use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;
use Ips\LoginTracker\EventSubscriber;

class LoginTrackerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['events']->subscribe(EventSubscriber::class);
    }

    public function register()
    {
        // No additional bindings needed
    }
}
