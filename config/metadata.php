<?php

return [

    /*
     * |--------------------------------------------------------------------------
     * | MetaData Group Root Prefix
     * |--------------------------------------------------------------------------
     * |
     * | This value will be added to your all routes from this package
     * | Example: APP_URL/{root_prefix}/api/{version}/metadata/action
     * |
     * | Note: while adding prefix add closing ending slash '/'
     */
    'root_prefix' => '',

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
    | Bank Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'bank_model' => \Fintech\MetaData\Models\Bank::class,

    /*
    |--------------------------------------------------------------------------
    | Bank Branch Model
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'bank_branch_model' => \Fintech\MetaData\Models\BankBranch::class,

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

    //** Model Config Point Do not Remove **//


    /*
    |--------------------------------------------------------------------------
    | Repositories
    |--------------------------------------------------------------------------
    |
    | This value will be used to across system where model is needed
    */
    'repositories' => [
        \Fintech\Auth\Interfaces\PermissionRepository::class => \Fintech\Auth\Repositories\Eloquent\PermissionRepository::class,

        \Fintech\MetaData\Interfaces\BankBranchRepository::class => \Fintech\MetaData\Repositories\Eloquent\BankBranchRepository::class,

        \Fintech\MetaData\Interfaces\BankRepository::class => \Fintech\MetaData\Repositories\Eloquent\BankRepository::class,

        \Fintech\MetaData\Interfaces\CityRepository::class => \Fintech\MetaData\Repositories\Eloquent\CityRepository::class,

        \Fintech\MetaData\Interfaces\CountryRepository::class => \Fintech\MetaData\Repositories\Eloquent\CountryRepository::class,

        \Fintech\MetaData\Interfaces\FundSourceRepository::class => \Fintech\MetaData\Repositories\Eloquent\FundSourceRepository::class,

        \Fintech\MetaData\Interfaces\OccupationRepository::class => \Fintech\MetaData\Repositories\Eloquent\OccupationRepository::class,

        \Fintech\MetaData\Interfaces\RegionRepository::class => \Fintech\MetaData\Repositories\Eloquent\RegionRepository::class,

        \Fintech\MetaData\Interfaces\RelationRepository::class => \Fintech\MetaData\Repositories\Eloquent\RelationRepository::class,

        \Fintech\MetaData\Interfaces\RemittancePurposeRepository::class => \Fintech\MetaData\Repositories\Eloquent\RemittancePurposeRepository::class,

        \Fintech\MetaData\Interfaces\StateRepository::class => \Fintech\MetaData\Repositories\Eloquent\StateRepository::class,

        \Fintech\MetaData\Interfaces\SubRegionRepository::class => \Fintech\MetaData\Repositories\Eloquent\SubRegionRepository::class,

        //** Repository Binding Config Point Do not Remove **//
        ],

];
