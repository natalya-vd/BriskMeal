<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\WeekController;
use \App\Http\Controllers\CartController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;
use App\Http\Controllers\Admin\AllergenController as AdminAllergenController;
use App\Http\Controllers\Admin\PreferenceController as AdminPreferenceController;
use App\Http\Controllers\Admin\UnitController as AdminUnitController;
use App\Http\Controllers\Admin\IngredientController as AdminIngredientController;
use App\Http\Controllers\Admin\NutritionValuesController as AdminNutritionValuesController;
use App\Http\Controllers\Admin\WeekController as AdminWeekController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/** Страницы доступны всем */
Route::get('/', [RecipeController::class, 'welcome'])->name('welcome');
Route::get('/catalog', [RecipeController::class, 'index'])->name('catalog');
Route::get('/catalog/{week}', [WeekController::class, 'index'])->name('catalogWeek');
Route::get('/recipe/{id}/{week}', [RecipeController::class, 'show'])->name('recipe');
Route::get('/plans', [PlanController::class, 'index'])->name('plans');
Route::view('/faq', 'faq');
Route::view('/giftcard', 'giftcard');


/** Страницы для залогиненных пользователей */
Route::middleware('auth')
    ->group(function () {
        Route::get('/cart', [CartController::class, 'index'])
            ->name('cart');

        Route::get('/order/{cart}', [OrderController::class, 'index'])->name('order');
    });


/** Админка */
Route::middleware('auth')
    ->name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::middleware('is_admin')
            ->group(function () {
                Route::get('/', function () {
                    return view('admin.pages.index');
                })->name('home');
                Route::resource('recipes', AdminRecipeController::class)->except([
                    'destroy', 'update', 'store', 'show'
                ]);
                Route::resource('allergens', AdminAllergenController::class)->except([
                    'destroy', 'update', 'store', 'show'
                ]);
                Route::resource('ingredients', AdminIngredientController::class)->except([
                    'destroy', 'update', 'store', 'show'
                ]);
                Route::resource('nutrition-values', AdminNutritionValuesController::class)->except([
                    'destroy', 'update', 'store', 'show'
                ]);
                Route::resource('preferences', AdminPreferenceController::class)->except([
                    'destroy', 'update', 'store', 'show'
                ]);
                Route::resource('units', AdminUnitController::class)->except([
                    'destroy', 'update', 'store', 'show'
                ]);

                Route::get('/weeks', [AdminWeekController::class, 'create'])->name('weeks.create');
                Route::get('/weeks/recipes', [AdminWeekController::class, 'index'])->name('weeks.index');

                Route::get('/orders', [AdminOrderController::class, 'index'])->name('orders.index');
                Route::get('/orders/{order}', [AdminOrderController::class, 'order'])->name('orders.order');
            });

        Route::get('/not-rights', function () {
            return view('admin.pages.not-rights');
        })->name('notRights');
    });

Auth::routes();
