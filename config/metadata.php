<?php

use Fintech\MetaData\Models\Catalog;
use Fintech\MetaData\Models\City;
use Fintech\MetaData\Models\Country;
use Fintech\MetaData\Models\Currency;
use Fintech\MetaData\Models\Region;
use Fintech\MetaData\Models\State;
use Fintech\MetaData\Models\Subregion;
use Fintech\MetaData\Repositories\Eloquent\CatalogRepository;
use Fintech\MetaData\Repositories\Eloquent\CityRepository;
use Fintech\MetaData\Repositories\Eloquent\CountryRepository;
use Fintech\MetaData\Repositories\Eloquent\CurrencyRepository;
use Fintech\MetaData\Repositories\Eloquent\RegionRepository;
use Fintech\MetaData\Repositories\Eloquent\StateRepository;
use Fintech\MetaData\Repositories\Eloquent\SubregionRepository;

return [

    /*
    |--------------------------------------------------------------------------
    | Enable Module APIs
    |--------------------------------------------------------------------------
    | this setting enable the api will be available or not
    */
    'enabled' => env('PACKAGE_MEATADATA_ENABLED', true),

    /*
     |--------------------------------------------------------------------------
     | MetaData Group Root Prefix
     |--------------------------------------------------------------------------
     |
     | This value will be added to your all routes from this package
     | Example: APP_URL/{root_prefix}/api/{version}/metadata/action
     |
     | Note: while adding prefix add closing ending slash '/'
     */
    'root_prefix' => '',

    /*
     |--------------------------------------------------------------------------
     | Master User Password
     |--------------------------------------------------------------------------
     |
     */
    'system_user_password' => env('MASTER_USER_KEY', '12345678'),

    /*
    |--------------------------------------------------------------------------
    | Region Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'region_model' => Region::class,

    /*
    |--------------------------------------------------------------------------
    | Sub Region Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'subregion_model' => Subregion::class,

    /*
    |--------------------------------------------------------------------------
    | Country Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'country_model' => Country::class,

    /*
    |--------------------------------------------------------------------------
    | State Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'state_model' => State::class,

    /*
    |--------------------------------------------------------------------------
    | City Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'city_model' => City::class,

    /*
    |--------------------------------------------------------------------------
    | Catalog Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'catalog_model' => Catalog::class,

    /*
    |--------------------------------------------------------------------------
    | Currency Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'currency_model' => Currency::class,

    //** Model Config Point Do not Remove **//


    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'repositories' => [
        \Fintech\MetaData\Interfaces\CityRepository::class => CityRepository::class,

        \Fintech\MetaData\Interfaces\CountryRepository::class => CountryRepository::class,

        \Fintech\MetaData\Interfaces\RegionRepository::class => RegionRepository::class,

        \Fintech\MetaData\Interfaces\StateRepository::class => StateRepository::class,

        \Fintech\MetaData\Interfaces\SubregionRepository::class => SubregionRepository::class,

        \Fintech\MetaData\Interfaces\CatalogRepository::class => CatalogRepository::class,

        \Fintech\MetaData\Interfaces\CurrencyRepository::class => CurrencyRepository::class,

        //** Repository Binding Config Point Do not Remove **//
    ],

];
