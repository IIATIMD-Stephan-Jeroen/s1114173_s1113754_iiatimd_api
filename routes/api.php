<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


/**
 * PUBLIC ROUTES
 */
Route::post('register', [\App\Http\Controllers\AuthController::class, 'register']);
Route::post('login', [\App\Http\Controllers\AuthController::class, 'login']);


/**
 * PRIVATE AUTH ROUTES
 */
Route::middleware('auth:sanctum')->group(function() {
    Route::get('user', [\App\Http\Controllers\AuthController::class, 'user']);
});
Route::get('/items',[\App\Http\Controllers\ItemController::class, 'getItems']);
Route::get('/items/weapons',[\App\Http\Controllers\ItemController::class, 'getWeapons']);
Route::get('/items/armor',[\App\Http\Controllers\ItemController::class, 'getArmor']);
Route::get('/items/consumables',[\App\Http\Controllers\ItemController::class, 'getConsumables']);
Route::get('/items/focus',[\App\Http\Controllers\ItemController::class, 'getFocus']);
Route::get('/items/potions',[\App\Http\Controllers\ItemController::class, 'getPotions']);
Route::get('/items/tools',[\App\Http\Controllers\ItemController::class, 'getTools']);
Route::get('/item/{itemId}',[\App\Http\Controllers\ItemController::class, 'getItemById']);
Route::post('/item/insertItem/{name}/{cost}/{currency}/{weight}/{communityItem}/{damage}/{damage_type}/{prop1}/{prop2}/{prop3}/{prop4}', [\App\Http\Controllers\ItemController::class, 'insertItem']);