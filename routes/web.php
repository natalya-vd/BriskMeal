<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;
use App\Http\Controllers\WeekController;
use \App\Http\Controllers\CartController;
use App\Http\Controllers\PreferenceController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/catalog', [RecipeController::class, 'index'])
    ->name('catalog');
Route::get('/catalog/{week}', [WeekController::class, 'index'])
    ->name('catalogWeek');
Route::get('/recipe/{id}', [RecipeController::class, 'show'])->name('recipe');
Route::get('/plans', PreferenceController::class)->name('plans');
Route::get('/cart', function () {
    return view('cart');
})->name('cart');


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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
