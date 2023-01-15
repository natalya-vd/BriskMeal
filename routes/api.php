<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\RecipeController as AdminRecipeController;

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

/** Админка */
Route::name('admin.')
    ->prefix('admin')
    ->group(function () {
        Route::get('/recipes', [AdminRecipeController::class, 'list'])->name('recipes.list');
        Route::post('/recipes', [AdminRecipeController::class, 'store'])->name('recipes.store');
        Route::put('/recipes/{recipe}', [AdminRecipeController::class, 'update'])->name('recipes.update');
        Route::delete('/recipes/{recipe}', [AdminRecipeController::class, 'destroy'])->name('recipes.destroy');
    });

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
