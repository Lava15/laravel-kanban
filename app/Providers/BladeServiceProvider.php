<?php
declare(strict_types = 1);

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

final class BladeServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        Vite::macro('image', fn ($asset) =>  asset('assets/' . $asset));
        Vite::macro('icon', fn ($asset) =>  Vite::asset("@icon/{$asset}"));
    }
}
