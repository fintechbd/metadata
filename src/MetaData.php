<?php

namespace Fintech\MetaData;

use Fintech\MetaData\Services\CityService;
use Fintech\MetaData\Services\CountryService;
use Fintech\MetaData\Services\FundSourceService;
use Fintech\MetaData\Services\OccupationService;
use Fintech\MetaData\Services\RegionService;
use Fintech\MetaData\Services\RelationService;
use Fintech\MetaData\Services\RemittancePurposeService;
use Fintech\MetaData\Services\StateService;
use Fintech\MetaData\Services\SubRegionService;

class MetaData
{
    /**
     * @return RegionService
     *
     */
    public function region()
    {
        return app(RegionService::class);
    }

    /**
     * @return SubRegionService
     *
     */
    public function subregion()
    {
        return app(SubRegionService::class);
    }

    /**
     * @return CountryService
     *
     */
    public function country()
    {
        return app(CountryService::class);
    }

    /**
     * @return StateService
     *
     */
    public function state()
    {
        return app(StateService::class);
    }

    /**
     * @return CityService
     *
     */
    public function city()
    {
        return app(CityService::class);
    }

    /**
     * @return FundSourceService
     *
     */
    public function fundSource()
    {
        return app(FundSourceService::class);
    }

    /**
     * @return OccupationService
     *
     */
    public function occupation()
    {
        return app(OccupationService::class);
    }

    /**
     * @return RelationService
     *
     */
    public function relation()
    {
        return app(RelationService::class);
    }

    /**
     * @return RemittancePurposeService
     *
     */
    public function remittancePurpose()
    {
        return app(RemittancePurposeService::class);
    }

    /**
     * @return \Fintech\MetaData\Services\CatalogService
     */
    public function language()
    {
        return app(\Fintech\MetaData\Services\LanguageService::class);
    }
    /**
     * @return \Fintech\MetaData\Services\CatalogService
     */
    public function catalog()
    {
        return app(\Fintech\MetaData\Services\CatalogService::class);
    }

    /**
     * @return \Fintech\MetaData\Services\CurrencyService
     */
    public function currency()
    {
        return app(\Fintech\MetaData\Services\CurrencyService::class);
    }

    //** Crud Service Method Point Do not Remove **//


}
