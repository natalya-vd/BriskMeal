<?php

namespace App\Providers;

use App\Queries\RecipesQueryBuilder;
use App\Queries\WeekQueryBuilder;
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
        $this->app->bind(RecipesQueryBuilder::class);
        $this->app->bind(WeekQueryBuilder::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
