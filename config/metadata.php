<?php

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
    'region_model' => \Fintech\MetaData\Models\Region::class,

    /*
    |--------------------------------------------------------------------------
    | Sub Region Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'subregion_model' => \Fintech\MetaData\Models\Subregion::class,

    /*
    |--------------------------------------------------------------------------
    | Country Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'country_model' => \Fintech\MetaData\Models\Country::class,

    /*
    |--------------------------------------------------------------------------
    | State Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'state_model' => \Fintech\MetaData\Models\State::class,

    /*
    |--------------------------------------------------------------------------
    | City Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'city_model' => \Fintech\MetaData\Models\City::class,

    /*
    |--------------------------------------------------------------------------
    | Source Of Fund Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'fund_source_model' => \Fintech\MetaData\Models\FundSource::class,

    /*
    |--------------------------------------------------------------------------
    | Occupation Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'occupation_model' => \Fintech\MetaData\Models\Occupation::class,

    /*
    |--------------------------------------------------------------------------
    | Relation Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'relation_model' => \Fintech\MetaData\Models\Relation::class,

    /*
    |--------------------------------------------------------------------------
    | Remittance Purpose Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'remittance_purpose_model' => \Fintech\MetaData\Models\RemittancePurpose::class,


    /*
    |--------------------------------------------------------------------------
    | Language Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'language_model' => \Fintech\MetaData\Models\Language::class,


    /*
    |--------------------------------------------------------------------------
    | Catalog Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'catalog_model' => \Fintech\MetaData\Models\Catalog::class,

    
    /*
    |--------------------------------------------------------------------------
    | Currency Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'currency_model' => \Fintech\MetaData\Models\Currency::class,

    //** Model Config Point Do not Remove **//


    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'repositories' => [
        \Fintech\MetaData\Interfaces\CityRepository::class => \Fintech\MetaData\Repositories\Eloquent\CityRepository::class,

        \Fintech\MetaData\Interfaces\CountryRepository::class => \Fintech\MetaData\Repositories\Eloquent\CountryRepository::class,

        \Fintech\MetaData\Interfaces\FundSourceRepository::class => \Fintech\MetaData\Repositories\Eloquent\FundSourceRepository::class,

        \Fintech\MetaData\Interfaces\OccupationRepository::class => \Fintech\MetaData\Repositories\Eloquent\OccupationRepository::class,

        \Fintech\MetaData\Interfaces\RegionRepository::class => \Fintech\MetaData\Repositories\Eloquent\RegionRepository::class,

        \Fintech\MetaData\Interfaces\RelationRepository::class => \Fintech\MetaData\Repositories\Eloquent\RelationRepository::class,

        \Fintech\MetaData\Interfaces\RemittancePurposeRepository::class => \Fintech\MetaData\Repositories\Eloquent\RemittancePurposeRepository::class,

        \Fintech\MetaData\Interfaces\StateRepository::class => \Fintech\MetaData\Repositories\Eloquent\StateRepository::class,

        \Fintech\MetaData\Interfaces\SubRegionRepository::class => \Fintech\MetaData\Repositories\Eloquent\SubRegionRepository::class,

        \Fintech\MetaData\Interfaces\LanguageRepository::class => \Fintech\MetaData\Repositories\Eloquent\LanguageRepository::class,

        \Fintech\MetaData\Interfaces\CatalogRepository::class => \Fintech\MetaData\Repositories\Eloquent\CatalogRepository::class,

        \Fintech\MetaData\Interfaces\CurrencyRepository::class => \Fintech\MetaData\Repositories\Eloquent\CurrencyRepository::class,

        //** Repository Binding Config Point Do not Remove **//
    ],

];
