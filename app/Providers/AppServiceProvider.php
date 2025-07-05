<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Jalur ke mana pengguna diarahkan setelah login.
     */
    public const HOME = '/pelanggan';

    public function boot(): void
    {
        parent::boot();
    }
}

