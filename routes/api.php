<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DrinkController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/drinks", [DrinkController::class, "getDrinks"]);
Route::get("/onedrink/{drinkName}",[DrinkController::class,"getOneDrink"]);
Route::get("/modifydrink", [DrinkController::class, "updateDrink"]);
Route::delete("/deletedrink", [DrinkController::class, "deleteDrink"]);
Route::get("/drinkswall", [DrinkController::class, "getDrinksWithAll"]);
