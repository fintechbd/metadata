<?php

namespace Fintech\MetaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Fintech\MetaData\Services\RegionService region()
 * @method static \Fintech\MetaData\Services\SubRegionService subregion()
 * @method static \Fintech\MetaData\Services\CountryService country()
 * @method static \Fintech\MetaData\Services\StateService state()
 * @method static \Fintech\MetaData\Services\CityService city()
 * @method static \Fintech\MetaData\Services\FundSourceService fundSource()
 * @method static \Fintech\MetaData\Services\OccupationService occupation()
 * @method static \Fintech\MetaData\Services\RelationService relation()
 * @method static \Fintech\MetaData\Services\RemittancePurposeService remittancePurpose()
 * @method static \Fintech\MetaData\Services\CatalogService catalog()
 * @method static \Fintech\MetaData\Services\LanguageService language()
 * @method static \Fintech\MetaData\Services\CurrencyService currency()
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
