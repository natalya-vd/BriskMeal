<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PlanController;

use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;
use App\Http\Controllers\Admin\AllergenController as AdminAllergenController;
use App\Http\Controllers\Admin\PreferenceController as AdminPreferenceController;
use App\Http\Controllers\Admin\UnitController as AdminUnitController;
use App\Http\Controllers\Admin\IngredientController as AdminIngredientController;
use App\Http\Controllers\Admin\NutritionValuesController as AdminNutritionValuesController;
use App\Http\Controllers\Admin\WeekController as AdminWeekController;
use App\Http\Controllers\Admin\FileController as AdminFileController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/** Авторизация */
Route::middleware('auth')
    ->group(function () {
        Route::post('/logout', [LogoutController::class, 'logoutApi']);
    });


/** Основной сайт */
Route::middleware('auth')
    ->group(function () {
        Route::post('/cart/add', [CartController::class, 'add']);
        Route::delete('/cart/remove/{recipe}', [CartController::class, 'remove']);
        Route::put('/cart/plus/{recipe}', [CartController::class, 'plus']);
        Route::put('/cart/minus/{recipe}', [CartController::class, 'minus']);

        Route::post('/plans', [PlanController::class, 'store'])->name('plans.store');
    });

/** Админка */
Route::middleware(['auth', 'is_admin'])
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/recipes', [AdminRecipeController::class, 'list'])->name('recipes.list');
        Route::apiResource('recipes', AdminRecipeController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/allergens', [AdminAllergenController::class, 'list'])->name('allergens.list');
        Route::apiResource('allergens', AdminAllergenController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/preferences', [AdminPreferenceController::class, 'list'])->name('preferences.list');
        Route::apiResource('preferences', AdminPreferenceController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/units', [AdminUnitController::class, 'list'])->name('units.list');
        Route::apiResource('units', AdminUnitController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/ingredients', [AdminIngredientController::class, 'list'])->name('ingredients.list');
        Route::apiResource('ingredients', AdminIngredientController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('/nutrition-values', [AdminNutritionValuesController::class, 'list'])->name('nutrition-values.list');
        Route::apiResource('nutrition-values', AdminNutritionValuesController::class)->only([
            'destroy', 'update', 'store'
        ]);

        Route::get('weeks/recipes/{week}', [AdminWeekController::class, 'list'])->name('weeks.list');
        Route::post('weeks', [AdminWeekController::class, 'store'])->name('weeks.store');
        Route::put('weeks', [AdminWeekController::class, 'update'])->name('weeks.update');

        Route::post('/recipes/photo', [AdminFileController::class, 'storeRecipesPhoto'])->name('recipes.store-photo');
        Route::delete('/recipes/photo/{id}', [AdminFileController::class, 'destroyRecipesPhoto'])->name('recipes.destroy-photo');
        Route::post('/recipes/file', [AdminFileController::class, 'storeRecipesFile'])->name('recipes.store-file');
        Route::delete('/recipes/file/{recipe}', [AdminFileController::class, 'destroyRecipesFile'])->name('recipes.destroy-file');
    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
