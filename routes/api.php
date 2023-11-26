<?php

use Illuminate\Support\Facades\Config;
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
if (Config::get('fintech.metadata.enabled')) {
    Route::prefix('metadata')->name('metadata.')
//        ->middleware(config('fintech.auth.middleware'))
        ->group(function () {

            Route::apiResource('regions', \Fintech\MetaData\Http\Controllers\RegionController::class);
            Route::post('regions/{region}/restore', [\Fintech\MetaData\Http\Controllers\RegionController::class, 'restore'])->name('regions.restore');

            Route::apiResource('subregions', \Fintech\MetaData\Http\Controllers\SubRegionController::class);
            Route::post('subregions/{subregion}/restore', [\Fintech\MetaData\Http\Controllers\SubRegionController::class, 'restore'])->name('subregions.restore');

            Route::apiResource('countries', \Fintech\MetaData\Http\Controllers\CountryController::class);
            Route::post('countries/{country}/restore', [\Fintech\MetaData\Http\Controllers\CountryController::class, 'restore'])->name('countries.restore');
            Route::get('countries/{country}/toggle-multi-currency', [\Fintech\MetaData\Http\Controllers\CountryController::class, 'toggleMultiCurrency'])->name('countries.toggle-multi-currency');
            Route::get('countries/{country}/toggle-serving', [\Fintech\MetaData\Http\Controllers\CountryController::class, 'toggleServingCountry'])->name('countries.toggle-serving');

            Route::apiResource('states', \Fintech\MetaData\Http\Controllers\StateController::class);
            Route::post('states/{state}/restore', [\Fintech\MetaData\Http\Controllers\StateController::class, 'restore'])->name('states.restore');

            Route::apiResource('cities', \Fintech\MetaData\Http\Controllers\CityController::class);
            Route::post('cities/{city}/restore', [\Fintech\MetaData\Http\Controllers\CityController::class, 'restore'])->name('cities.restore');

            Route::apiResource('fund-sources', \Fintech\MetaData\Http\Controllers\FundSourceController::class);
            Route::post('fund-sources/{fund_source}/restore', [\Fintech\MetaData\Http\Controllers\FundSourceController::class, 'restore'])->name('fund-sources.restore');

            Route::apiResource('occupations', \Fintech\MetaData\Http\Controllers\OccupationController::class);
            Route::post('occupations/{occupation}/restore', [\Fintech\MetaData\Http\Controllers\OccupationController::class, 'restore'])->name('occupations.restore');

            Route::apiResource('relations', \Fintech\MetaData\Http\Controllers\RelationController::class);
            Route::post('relations/{relation}/restore', [\Fintech\MetaData\Http\Controllers\RelationController::class, 'restore'])->name('relations.restore');

            Route::apiResource('remittance-purposes', \Fintech\MetaData\Http\Controllers\RemittancePurposeController::class);
            Route::post('remittance-purposes/{remittance_purpose}/restore', [\Fintech\MetaData\Http\Controllers\RemittancePurposeController::class, 'restore'])->name('remittance-purposes.restore');

            Route::apiResource('languages', \Fintech\MetaData\Http\Controllers\LanguageController::class)->only(['index', 'update', 'show']);
            Route::get('languages/{language}/toggle', [\Fintech\MetaData\Http\Controllers\LanguageController::class, 'toggle'])->name('languages.toggle');

            Route::apiResource('catalogs', \Fintech\MetaData\Http\Controllers\CatalogController::class);
            Route::post('catalogs/{catalog}/restore', [\Fintech\MetaData\Http\Controllers\CatalogController::class, 'restore'])->name('catalogs.restore');

            //DO NOT REMOVE THIS LINE//
        });

    Route::prefix('dropdown')->name('metadata.')->group(function () {
        Route::get('regions', [\Fintech\MetaData\Http\Controllers\RegionController::class, 'dropdown'])->name('regions.dropdown');
        Route::get('subregions', [\Fintech\MetaData\Http\Controllers\SubRegionController::class, 'dropdown'])->name('subregions.dropdown');
        Route::get('countries', [\Fintech\MetaData\Http\Controllers\CountryController::class, 'dropdown'])->name('countries.dropdown');
        Route::get('languages', [\Fintech\MetaData\Http\Controllers\LanguageController::class, 'dropdown'])->name('languages.dropdown');
        Route::get('currencies', [\Fintech\MetaData\Http\Controllers\LanguageController::class, 'dropdown'])->name('languages.dropdown');
        Route::get('states', [\Fintech\MetaData\Http\Controllers\StateController::class, 'dropdown'])->name('states.dropdown');
        Route::get('cities', [\Fintech\MetaData\Http\Controllers\CityController::class, 'dropdown'])->name('cities.dropdown');
        Route::get('fund-sources', [\Fintech\MetaData\Http\Controllers\FundSourceController::class, 'dropdown'])->name('fund-sources.dropdown');
        Route::get('occupations', [\Fintech\MetaData\Http\Controllers\OccupationController::class, 'dropdown'])->name('occupations.dropdown');
        Route::get('remittance-purposes', [\Fintech\MetaData\Http\Controllers\RemittancePurposeController::class, 'dropdown'])->name('remittance-purposes.dropdown');
        Route::get('relations', [\Fintech\MetaData\Http\Controllers\RelationController::class, 'dropdown'])->name('relations.dropdown');

        Route::get('catalog-types', [\Fintech\MetaData\Http\Controllers\CatalogController::class, 'catalogTypeDropdown'])->name('catalog-types.dropdown');
        Route::get('genders', \Fintech\MetaData\Http\Controllers\GenderController::class)->name('genders.dropdown');
        Route::get('blood-groups', \Fintech\MetaData\Http\Controllers\BloodGroupController::class)->name('blood-groups.dropdown');
        Route::get('marital-statuses', \Fintech\MetaData\Http\Controllers\MaritalStatusController::class)->name('marital-statuses.dropdown');
    });
}
