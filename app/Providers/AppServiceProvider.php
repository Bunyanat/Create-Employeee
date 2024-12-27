<?php

namespace App\Providers;

use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;
use Inertia\Inertia; // เพิ่มบรรทัดนี้


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Vite::prefetch(concurrency: 3);
        Inertia::share([
            'errors' => function () {
                return session()->get('errors')
                    ? session()->get('errors')->getBag('default')->getMessages()
                    : (object) [];
            },
        ]);
    }
}
