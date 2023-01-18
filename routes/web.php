<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\WeekController;
use \App\Http\Controllers\CartController;
use App\Http\Controllers\PreferenceController;

use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;
use App\Http\Controllers\Admin\AllergenController as AdminAllergenController;

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

Route::get('/', [RecipeController::class, 'welcome'])->name('welcome');
Route::get('/catalog', [RecipeController::class, 'index'])->name('catalog');
Route::get('/catalog/{week}', [WeekController::class, 'index'])->name('catalogWeek');
Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('recipe');
Route::get('/plans', PreferenceController::class)->name('plans');
Route::get('/cart', function () { return view('cart');})->name('cart');


/** Корзина (тестирование) */

Route::get('/catalog-test', [TestController::class, 'index'])
    ->name('catalog-test');

Route::get('/cart-test', [CartController::class, 'index'])
    ->name('cart-test');

Route::match(['get', 'post'], '/cart/add/{recipe}', [CartController::class, 'add'])
    ->name('cart-add');

Route::match(['get', 'post'], '/cart/remove/{recipe}', [CartController::class, 'remove'])
    ->name('cart-remove');

Route::match(['get', 'post'], '/cart/plus/{recipe}', [CartController::class, 'plus'])
    ->name('cart-plus');

Route::match(['get', 'post'], '/cart/minus/{recipe}', [CartController::class, 'minus'])
    ->name('cart-minus');

/** Админка */
Route::name('admin.')
    ->prefix('admin')
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
        Route::resource('ingredients', AdminRecipeController::class)->except([
            'destroy', 'update', 'store', 'show'
        ]);
        Route::resource('nutrition-values', AdminRecipeController::class)->except([
            'destroy', 'update', 'store', 'show'
        ]);
        Route::resource('preferences', AdminRecipeController::class)->except([
            'destroy', 'update', 'store', 'show'
        ]);
        Route::resource('units', AdminRecipeController::class)->except([
            'destroy', 'update', 'store', 'show'
        ]);
        Route::resource('weeks', AdminRecipeController::class)->except([
            'destroy', 'update', 'store', 'show'
        ]);
    });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');