<?php

namespace Fintech\MetaData\Facades;

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
use Fintech\MetaData\Services\SubRegionService;
use Illuminate\Support\Facades\Facade;

/**
 * @method static RegionService region()
 * @method static SubRegionService subregion()
 * @method static CountryService country()
 * @method static StateService state()
 * @method static CityService city()
 * @method static FundSourceService fundSource()
 * @method static OccupationService occupation()
 * @method static RelationService relation()
 * @method static RemittancePurposeService remittancePurpose()
 * @method static CatalogService catalog()
 * @method static LanguageService language()
 * @method static CurrencyService currency()
 * // Crud Service Method Point Do not Remove //
 *
 * @see \Fintech\MetaData\MetaData
 */
class MetaData extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fintech\MetaData\MetaData::class;
    }
}
