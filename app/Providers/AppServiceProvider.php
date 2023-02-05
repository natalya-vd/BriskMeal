<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use DB;
use Log;

use App\Queries\RecipesQueryBuilder;
use App\Queries\WeekQueryBuilder;
use App\Queries\PreferenceQueryBuilder;
use App\Queries\NutritionValuesQueryBuilder;
use App\Queries\IngredientQueryBuilder;
use App\Queries\AllergenQueryBuilder;
use App\Queries\UnitQueryBuilder;
use App\Queries\OrderQueryBuilder;

use App\Services\UploadFileService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // QueryBuilders
        $this->app->bind(RecipesQueryBuilder::class);
        $this->app->bind(WeekQueryBuilder::class);
        $this->app->bind(PreferenceQueryBuilder::class);
        $this->app->bind(NutritionValuesQueryBuilder::class);
        $this->app->bind(IngredientQueryBuilder::class);
        $this->app->bind(AllergenQueryBuilder::class);
        $this->app->bind(UnitQueryBuilder::class);
        $this->app->bind(OrderQueryBuilder::class);

        // Services
        $this->app->bind(UploadFileService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();

        //Запись запросов БД в laravel.log
        DB::listen(function ($query) {
            Log::info(
                $query->sql,
                $query->bindings,
                $query->time
            );
        });
    }
}
