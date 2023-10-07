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

Route::prefix('metadata')->name('metadata.')->group(function () {

    Route::apiResource('regions', \Fintech\MetaData\Http\Controllers\RegionController::class);
    Route::post('regions/{region}/restore', [\Fintech\MetaData\Http\Controllers\RegionController::class, 'restore'])->name('regions.restore');

    Route::apiResource('subregions', \Fintech\MetaData\Http\Controllers\SubRegionController::class);
    Route::post('subregions/{subregion}/restore', [\Fintech\MetaData\Http\Controllers\SubRegionController::class, 'restore'])->name('subregions.restore');

    Route::apiResource('countries', \Fintech\MetaData\Http\Controllers\CountryController::class);
    Route::post('countries/{country}/restore', [\Fintech\MetaData\Http\Controllers\CountryController::class, 'restore'])->name('countries.restore');

    Route::apiResource('states', \Fintech\MetaData\Http\Controllers\StateController::class);
    Route::post('states/{state}/restore', [\Fintech\MetaData\Http\Controllers\StateController::class, 'restore'])->name('states.restore');

    Route::apiResource('cities', \Fintech\MetaData\Http\Controllers\CityController::class);
    Route::post('cities/{city}/restore', [\Fintech\MetaData\Http\Controllers\CityController::class, 'restore'])->name('cities.restore');

    Route::apiResource('banks', \Fintech\MetaData\Http\Controllers\BankController::class);
    Route::post('banks/{bank}/restore', [\Fintech\MetaData\Http\Controllers\BankController::class, 'restore'])->name('banks.restore');

    Route::apiResource('bank-branches', \Fintech\MetaData\Http\Controllers\BankBranchController::class);
    Route::post('bank-branches/{bank-branch}/restore', [\Fintech\MetaData\Http\Controllers\BankBranchController::class, 'restore'])->name('bank-branches.restore');

    Route::apiResource('fund-sources', \Fintech\MetaData\Http\Controllers\FundSourceController::class);
    Route::post('fund-sources/{fund-source}/restore', [\Fintech\MetaData\Http\Controllers\FundSourceController::class, 'restore'])->name('fund-sources.restore');

    Route::apiResource('occupations', \Fintech\MetaData\Http\Controllers\OccupationController::class);
    Route::post('occupations/{occupation}/restore', [\Fintech\MetaData\Http\Controllers\OccupationController::class, 'restore'])->name('occupations.restore');

    Route::apiResource('relations', \Fintech\MetaData\Http\Controllers\RelationController::class);
    Route::post('relations/{relation}/restore', [\Fintech\MetaData\Http\Controllers\RelationController::class, 'restore'])->name('relations.restore');

    Route::apiResource('remittance-purposes', \Fintech\MetaData\Http\Controllers\RemittancePurposeController::class);
    Route::post('remittance-purposes/{remittance-purpose}/restore', [\Fintech\MetaData\Http\Controllers\RegionController::class, 'restore'])->name('remittance-purposes.restore');
});
