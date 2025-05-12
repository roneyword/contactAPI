<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contact\ContactInterface;
use App\Repositories\Contact\ContactRepository;
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
        $this->app->bind(ContactInterface::class, ContactRepository::class);
    }
}
