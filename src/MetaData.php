<?php

namespace Fintech\MetaData;

use Fintech\Auth\Services\IdDocTypeService;
use Fintech\MetaData\Services\CatalogService;
use Fintech\MetaData\Services\CityService;
use Fintech\MetaData\Services\CountryService;
use Fintech\MetaData\Services\CurrencyService;
use Fintech\MetaData\Services\FundSourceService;
use Fintech\MetaData\Services\LanguageService;
use Fintech\MetaData\Services\OccupationService;
use Fintech\MetaData\Services\RegionService;
use Fintech\MetaData\Services\RelationService;
use Fintech\MetaData\Services\RemittancePurposeService;
use Fintech\MetaData\Services\StateService;
use Fintech\MetaData\Services\SubregionService;

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
     * @return SubregionService
     *
     */
    public function subregion()
    {
        return app(SubregionService::class);
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
     * @return CatalogService
     */
    public function language()
    {
        return app(LanguageService::class);
    }

    /**
     * @return CatalogService
     */
    public function catalog()
    {
        return app(CatalogService::class);
    }

    /**
     * @return CurrencyService
     */
    public function currency()
    {
        return app(CurrencyService::class);
    }

    /**
     * @return IdDocTypeService
     */
    public function idDocType()
    {
        return app(IdDocTypeService::class);
    }

    //** Crud Service Method Point Do not Remove **//


}
