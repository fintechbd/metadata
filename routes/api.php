<?php

use Fintech\MetaData\Http\Controllers\BloodGroupController;
use Fintech\MetaData\Http\Controllers\CatalogController;
use Fintech\MetaData\Http\Controllers\CityController;
use Fintech\MetaData\Http\Controllers\CountryController;
use Fintech\MetaData\Http\Controllers\CountryCurrencyController;
use Fintech\MetaData\Http\Controllers\CurrencyController;
use Fintech\MetaData\Http\Controllers\FundSourceController;
use Fintech\MetaData\Http\Controllers\GenderController;
use Fintech\MetaData\Http\Controllers\IdDocTypeController;
use Fintech\MetaData\Http\Controllers\LanguageController;
use Fintech\MetaData\Http\Controllers\MaritalStatusController;
use Fintech\MetaData\Http\Controllers\OccupationController;
use Fintech\MetaData\Http\Controllers\PhoneCodeDropDownController;
use Fintech\MetaData\Http\Controllers\RegionController;
use Fintech\MetaData\Http\Controllers\RelationController;
use Fintech\MetaData\Http\Controllers\RemittancePurposeController;
use Fintech\MetaData\Http\Controllers\StateController;
use Fintech\MetaData\Http\Controllers\SubRegionController;
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
        ->middleware(config('fintech.auth.middleware'))
        ->group(function () {

            Route::apiResource('regions', RegionController::class);
            Route::post('regions/{region}/restore', [RegionController::class, 'restore'])->name('regions.restore');

            Route::apiResource('subregions', SubRegionController::class);
            Route::post('subregions/{subregion}/restore', [SubRegionController::class, 'restore'])->name('subregions.restore');

            Route::apiResource('countries', CountryController::class);
            Route::post('countries/{country}/restore', [CountryController::class, 'restore'])->name('countries.restore');
            Route::get('countries/{country}/toggle-serving', [CountryController::class, 'toggleServingCountry'])->name('countries.toggle-serving');

            Route::apiResource('states', StateController::class);
            Route::post('states/{state}/restore', [StateController::class, 'restore'])->name('states.restore');

            Route::apiResource('cities', CityController::class);
            Route::post('cities/{city}/restore', [CityController::class, 'restore'])->name('cities.restore');

            Route::apiResource('fund-sources', FundSourceController::class);
            Route::post('fund-sources/{fund_source}/restore', [FundSourceController::class, 'restore'])->name('fund-sources.restore');

            Route::apiResource('occupations', OccupationController::class);
            Route::post('occupations/{occupation}/restore', [OccupationController::class, 'restore'])->name('occupations.restore');

            Route::apiResource('relations', RelationController::class);
            Route::post('relations/{relation}/restore', [RelationController::class, 'restore'])->name('relations.restore');

            Route::apiResource('remittance-purposes', RemittancePurposeController::class);
            Route::post('remittance-purposes/{remittance_purpose}/restore', [RemittancePurposeController::class, 'restore'])->name('remittance-purposes.restore');

            Route::apiResource('languages', LanguageController::class)->only(['index', 'update', 'show']);
            Route::get('languages/{language}/toggle', [LanguageController::class, 'toggle'])->name('languages.toggle');

            Route::apiResource('catalogs', CatalogController::class);
            Route::post('catalogs/{catalog}/restore', [CatalogController::class, 'restore'])->name('catalogs.restore');

            Route::apiResource('currencies', CurrencyController::class)->only(['index', 'update', 'show']);
            Route::get('currencies/{currency}/toggle', [CurrencyController::class, 'toggle'])->name('currencies.toggle');

            Route::apiResource('country-currencies', CountryCurrencyController::class)->only(['show', 'update']);

            //DO NOT REMOVE THIS LINE//
        });
    Route::prefix('auth')->name('metadata.')
        ->middleware(config('fintech.auth.middleware'))
        ->group(function () {
            Route::post('id-doc-types/{id_doc_type}/restore', [IdDocTypeController::class, 'restore'])->name('id-doc-types.restore');
            Route::apiResource('id-doc-types', IdDocTypeController::class);
        });
    Route::prefix('dropdown')->name('metadata.')->group(function () {
        Route::get('regions', [RegionController::class, 'dropdown'])->name('regions.dropdown');
        Route::get('subregions', [SubRegionController::class, 'dropdown'])->name('subregions.dropdown');
        Route::get('countries', [CountryController::class, 'dropdown'])->name('countries.dropdown');
        Route::get('nationalities', [CountryController::class, 'nationalityDropdown'])->name('nationalities.dropdown');
        Route::get('languages', [LanguageController::class, 'dropdown'])->name('languages.dropdown');
        Route::get('currencies', [CurrencyController::class, 'dropdown'])->name('currencies.dropdown');
        Route::get('states', [StateController::class, 'dropdown'])->name('states.dropdown');
        Route::get('cities', [CityController::class, 'dropdown'])->name('cities.dropdown');
        Route::get('fund-sources', [FundSourceController::class, 'dropdown'])->name('fund-sources.dropdown');
        Route::get('occupations', [OccupationController::class, 'dropdown'])->name('occupations.dropdown');
        Route::get('remittance-purposes', [RemittancePurposeController::class, 'dropdown'])->name('remittance-purposes.dropdown');
        Route::get('relations', [RelationController::class, 'dropdown'])->name('relations.dropdown');
        Route::get('phone-codes', PhoneCodeDropDownController::class)->name('phone-codes.dropdown');
        Route::get('catalog-types', [CatalogController::class, 'dropdown'])->name('catalog-types.dropdown');
        Route::get('genders', GenderController::class)->name('genders.dropdown');
        Route::get('blood-groups', BloodGroupController::class)->name('blood-groups.dropdown');
        Route::get('marital-statuses', MaritalStatusController::class)->name('marital-statuses.dropdown');
        Route::get('id-doc-types', [IdDocTypeController::class, 'dropdown'])->name('id-doc-types.dropdown');
    });
}
