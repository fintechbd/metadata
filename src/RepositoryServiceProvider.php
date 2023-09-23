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
use Fintech\MetaData\Repositories\Mongodb\BankBranchRepository as MongodbBankBranchRepository;
use Fintech\MetaData\Repositories\Mongodb\BankRepository as MongodbBankRepository;
use Fintech\MetaData\Repositories\Mongodb\CountryRepository as MongodbCountryRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider implements DeferrableProvider
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
            'mongodb' => '',
        ],
        CountryRepository::class => [
            'default' => EloquentCountryRepository::class,
            'mongodb' => '',
        ],
        FundSourceRepository::class => [
            'default' => EloquentFundSourceRepository::class,
            'mongodb' => '',
        ],
        OccupationRepository::class => [
            'default' => EloquentOccupationRepository::class,
            'mongodb' => '',
        ],
        RegionRepository::class => [
            'default' => EloquentRegionRepository::class,
            'mongodb' => '',
        ],
        RelationRepository::class => [
            'default' => '',
            'mongodb' => '',
        ],
        RemittancePurposeRepository::class => [
            'default' => '',
            'mongodb' => '',
        ],
        StateRepository::class => [
            'default' => '',
            'mongodb' => '',
        ],
        SubRegionRepository::class => [
            'default' => '',
            'mongodb' => '',
        ],
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(CountryRepository::class, function () {
            return match (config('database.default')) {
                'mongodb' => new MongodbCountryRepository(),
                default => new EloquentCountryRepository()
            };
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array<int, string>
     */
    public function provides(): array
    {
        return array_keys($this->repositories);
    }
}
