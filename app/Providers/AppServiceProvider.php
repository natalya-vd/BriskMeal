<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Queries\RecipesQueryBuilder;
use App\Queries\WeekQueryBuilder;
use App\Queries\PreferenceQueryBuilder;
use App\Queries\NutritionValuesQueryBuilder;
use App\Queries\IngredientQueryBuilder;
use App\Queries\AllergenQueryBuilder;

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
        $this->app->bind(PreferenceQueryBuilder::class);
        $this->app->bind(NutritionValuesQueryBuilder::class);
        $this->app->bind(IngredientQueryBuilder::class);
        $this->app->bind(AllergenQueryBuilder::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
    }
}
