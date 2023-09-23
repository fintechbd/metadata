<?php

namespace Fintech\MetaData;

use Fintech\MetaData\Interfaces\BankBranchRepository;
use Fintech\MetaData\Interfaces\BankRepository;
use Fintech\MetaData\Interfaces\CityRepository;
use Fintech\MetaData\Interfaces\CountryRepository;
use Fintech\MetaData\Interfaces\FundSourceRepository;
use Fintech\MetaData\Interfaces\OccupationRepository;
use Fintech\MetaData\Interfaces\RegionRepository;
use Fintech\MetaData\Interfaces\RelationRepository;
use Fintech\MetaData\Interfaces\RemittancePurposeRepository;
use Fintech\MetaData\Interfaces\StateRepository;
use Fintech\MetaData\Interfaces\SubRegionRepository;
use Fintech\MetaData\Repositories\Eloquent\BankBranchRepository as EloquentBankBranchRepository;
use Fintech\MetaData\Repositories\Eloquent\BankRepository as EloquentBankRepository;
use Fintech\MetaData\Repositories\Eloquent\CityRepository as EloquentCityRepository;
use Fintech\MetaData\Repositories\Eloquent\CountryRepository as EloquentCountryRepository;
use Fintech\MetaData\Repositories\Eloquent\FundSourceRepository as EloquentFundSourceRepository;
use Fintech\MetaData\Repositories\Eloquent\OccupationRepository as EloquentOccupationRepository;
use Fintech\MetaData\Repositories\Eloquent\RegionRepository as EloquentRegionRepository;
use Fintech\MetaData\Repositories\Eloquent\RelationRepository as EloquentRelationRepository;
use Fintech\MetaData\Repositories\Eloquent\RemittancePurposeRepository as EloquentRemittancePurposeRepository;
use Fintech\MetaData\Repositories\Eloquent\StateRepository as EloquentStateRepository;
use Fintech\MetaData\Repositories\Eloquent\SubRegionRepository as EloquentSubRegionRepository;
use Fintech\MetaData\Repositories\Mongodb\BankBranchRepository as MongodbBankBranchRepository;
use Fintech\MetaData\Repositories\Mongodb\BankRepository as MongodbBankRepository;
use Fintech\MetaData\Repositories\Mongodb\CityRepository as MongodbCityRepository;
use Fintech\MetaData\Repositories\Mongodb\CountryRepository as MongodbCountryRepository;
use Fintech\MetaData\Repositories\Mongodb\FundSourceRepository as MongodbFundSourceRepository;
use Fintech\MetaData\Repositories\Mongodb\OccupationRepository as MongodbOccupationRepository;
use Fintech\MetaData\Repositories\Mongodb\RegionRepository as MongodbRegionRepository;
use Fintech\MetaData\Repositories\Mongodb\RelationRepository as MongodbRelationRepository;
use Fintech\MetaData\Repositories\Mongodb\RemittancePurposeRepository as MongodbRemittancePurposeRepository;
use Fintech\MetaData\Repositories\Mongodb\StateRepository as MongodbStateRepository;
use Fintech\MetaData\Repositories\Mongodb\SubRegionRepository as MongodbSubRegionRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public array $repositories = [
        BankBranchRepository::class => [
            'default' => EloquentBankBranchRepository::class,
            'mongodb' => MongodbBankBranchRepository::class,
        ],
        BankRepository::class => [
            'default' => EloquentBankRepository::class,
            'mongodb' => MongodbBankRepository::class,
        ],
        CityRepository::class => [
            'default' => EloquentCityRepository::class,
            'mongodb' => MongodbCityRepository::class,
        ],
        CountryRepository::class => [
            'default' => EloquentCountryRepository::class,
            'mongodb' => MongodbCountryRepository::class,
        ],
        FundSourceRepository::class => [
            'default' => EloquentFundSourceRepository::class,
            'mongodb' => MongodbFundSourceRepository::class,
        ],
        OccupationRepository::class => [
            'default' => EloquentOccupationRepository::class,
            'mongodb' => MongodbOccupationRepository::class,
        ],
        RegionRepository::class => [
            'default' => EloquentRegionRepository::class,
            'mongodb' => MongodbRegionRepository::class,
        ],
        RelationRepository::class => [
            'default' => EloquentRelationRepository::class,
            'mongodb' => MongodbRelationRepository::class,
        ],
        RemittancePurposeRepository::class => [
            'default' => EloquentRemittancePurposeRepository::class,
            'mongodb' => MongodbRemittancePurposeRepository::class,
        ],
        StateRepository::class => [
            'default' => EloquentStateRepository::class,
            'mongodb' => MongodbStateRepository::class,
        ],
        SubRegionRepository::class => [
            'default' => EloquentSubRegionRepository::class,
            'mongodb' => MongodbSubRegionRepository::class,
        ],
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        foreach ($this->repositories as $interface => $bindings) {
            $this->app->bind($interface, function () use ($bindings) {
                return match (config('database.default')) {
                    'mongodb' => new $bindings['mongodb'](),
                    default => new $bindings['default'](),
                };
            }, true);
        }
    }

    //    /**
    //     * Get the services provided by the provider.
    //     *
    //     * @return array<int, string>
    //     */
    //    public function provides(): array
    //    {
    //        return array_keys($this->repositories);
    //    }
}
