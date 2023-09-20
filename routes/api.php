<?php

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

Route::prefix('v1')->group(function () {
    Route::prefix('metadata')->group(function () {
        Route::apiResource('countries', \Fintech\MetaData\Http\Controllers\CountryController::class);

    });
});

Route::prefix('v2')->group(function () {
    Route::prefix('metadata')->group(function () {

    });
});
