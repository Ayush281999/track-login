<?php

namespace Ips\LoginTracker;

use Illuminate\Auth\Events\Login;
use Illuminate\Auth\Events\Logout;

class EventSubscriber
{
    public function handleLogin(Login $event)
    {
        $user = $event->user;
        error_log("[LOGIN] User: {$user->email} | Time: " . now());
    }

    public function handleLogout(Logout $event)
    {
        $user = $event->user;
        error_log("[LOGOUT] User: {$user->email} | Time: " . now());
    }

    public function subscribe($events)
    {
        $events->listen(Login::class, [self::class, 'handleLogin']);
        $events->listen(Logout::class, [self::class, 'handleLogout']);
    }
}
