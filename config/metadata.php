<?php

use Fintech\MetaData\Models\Catalog;
use Fintech\MetaData\Models\City;
use Fintech\MetaData\Models\Country;
use Fintech\MetaData\Models\FundSource;
use Fintech\MetaData\Models\Occupation;
use Fintech\MetaData\Models\Region;
use Fintech\MetaData\Models\Relation;
use Fintech\MetaData\Models\RemittancePurpose;
use Fintech\MetaData\Models\State;
use Fintech\MetaData\Models\Subregion;
use Fintech\MetaData\Repositories\Eloquent\CatalogRepository;
use Fintech\MetaData\Repositories\Eloquent\CityRepository;
use Fintech\MetaData\Repositories\Eloquent\CountryRepository;
use Fintech\MetaData\Repositories\Eloquent\FundSourceRepository;
use Fintech\MetaData\Repositories\Eloquent\OccupationRepository;
use Fintech\MetaData\Repositories\Eloquent\RegionRepository;
use Fintech\MetaData\Repositories\Eloquent\RelationRepository;
use Fintech\MetaData\Repositories\Eloquent\RemittancePurposeRepository;
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
    | Source Of Fund Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'fund_source_model' => FundSource::class,

    /*
    |--------------------------------------------------------------------------
    | Occupation Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'occupation_model' => Occupation::class,

    /*
    |--------------------------------------------------------------------------
    | Relation Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'relation_model' => Relation::class,

    /*
    |--------------------------------------------------------------------------
    | Remittance Purpose Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'remittance_purpose_model' => RemittancePurpose::class,

    /*
    |--------------------------------------------------------------------------
    | Catalog Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'catalog_model' => Catalog::class,

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

        \Fintech\MetaData\Interfaces\FundSourceRepository::class => FundSourceRepository::class,

        \Fintech\MetaData\Interfaces\OccupationRepository::class => OccupationRepository::class,

        \Fintech\MetaData\Interfaces\RegionRepository::class => RegionRepository::class,

        \Fintech\MetaData\Interfaces\RelationRepository::class => RelationRepository::class,

        \Fintech\MetaData\Interfaces\RemittancePurposeRepository::class => RemittancePurposeRepository::class,

        \Fintech\MetaData\Interfaces\StateRepository::class => StateRepository::class,

        \Fintech\MetaData\Interfaces\SubregionRepository::class => SubregionRepository::class,

        \Fintech\MetaData\Interfaces\CatalogRepository::class => CatalogRepository::class,

        //** Repository Binding Config Point Do not Remove **//
    ],

];
