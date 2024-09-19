<?php

namespace Fintech\MetaData;

use Fintech\MetaData\Services\CatalogService;
use Fintech\MetaData\Services\CityService;
use Fintech\MetaData\Services\CountryService;
use Fintech\MetaData\Services\CurrencyService;
use Fintech\MetaData\Services\FundSourceService;
use Fintech\MetaData\Services\IdDocTypeService;
use Fintech\MetaData\Services\LanguageService;
use Fintech\MetaData\Services\OccupationService;
use Fintech\MetaData\Services\RegionService;
use Fintech\MetaData\Services\RelationService;
use Fintech\MetaData\Services\RemittancePurposeService;
use Fintech\MetaData\Services\StateService;
use Fintech\MetaData\Services\SubregionService;

class MetaData
{
    public function region($filters = null)
    {
        return \singleton(RegionService::class, $filters);
    }


    public function subregion($filters = null)
    {
        return \singleton(SubregionService::class, $filters);
    }


    public function country($filters = null)
    {
        return \singleton(CountryService::class, $filters);
    }


    public function state($filters = null)
    {
        return \singleton(StateService::class, $filters);
    }


    public function city($filters = null)
    {
        return \singleton(CityService::class, $filters);
    }


    public function fundSource($filters = null)
    {
        return \singleton(FundSourceService::class, $filters);
    }


    public function occupation($filters = null)
    {
        return \singleton(OccupationService::class, $filters);
    }


    public function relation($filters = null)
    {
        return \singleton(RelationService::class, $filters);
    }


    public function remittancePurpose($filters = null)
    {
        return \singleton(RemittancePurposeService::class, $filters);
    }

    public function language($filters = null)
    {
        return \singleton(LanguageService::class, $filters);
    }

    public function catalog($filters = null)
    {
        return \singleton(CatalogService::class, $filters);
    }

    public function currency($filters = null)
    {
        return \singleton(CurrencyService::class, $filters);
    }

    public function idDocType($filters = null)
    {
        return \singleton(IdDocTypeService::class, $filters);
    }

    //** Crud Service Method Point Do not Remove **//


}
