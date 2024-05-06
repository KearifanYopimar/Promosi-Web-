<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use illuminate\Pagination\Paginator;
// use Illuminate\Contracts\Pagination\Paginator;
>>>>>>> 34aca4c04279cf1cb0308240c7e2a79c6ea6a443
use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
        //
=======
        Paginator::useBootstrapFive();
>>>>>>> 34aca4c04279cf1cb0308240c7e2a79c6ea6a443
    }
}
