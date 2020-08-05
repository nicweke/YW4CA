<?php

namespace App\Providers;

use App\Volunteer;
use App\Observers\VolunteerObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Volunteer::observe(VolunteerObserver::class);
        Volunteer::observe(VolunteerObserver::class);
    }
}
