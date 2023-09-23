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
        Route::apiResource('regions', \Fintech\MetaData\Http\Controllers\RegionController::class);
        Route::apiResource('subregions', \Fintech\MetaData\Http\Controllers\SubRegionController::class);
        Route::apiResource('countries', \Fintech\MetaData\Http\Controllers\CountryController::class);
//        Route::apiResource('states', \Fintech\MetaData\Http\Controllers\StateController::class);
//        Route::apiResource('cities', \Fintech\MetaData\Http\Controllers\CityController::class);
//        Route::apiResource('banks', \Fintech\MetaData\Http\Controllers\BankController::class);
//        Route::apiResource('bank-branches', \Fintech\MetaData\Http\Controllers\BankBranchController::class);
//        Route::apiResource('fund-sources', \Fintech\MetaData\Http\Controllers\FundSourceController::class);
//        Route::apiResource('occupations', \Fintech\MetaData\Http\Controllers\OccupationController::class);
//        Route::apiResource('remittance-purposes', \Fintech\MetaData\Http\Controllers\RemittancePurposeController::class);
//        Route::apiResource('remittance-purposes', \Fintech\MetaData\Http\Controllers\RemittancePurposeController::class);
    });
});

Route::prefix('v2')->group(function () {
    Route::prefix('metadata')->group(function () {

    });
});
