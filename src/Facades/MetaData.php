<?php

namespace Fintech\MetaData\Facades;

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
use Illuminate\Support\Facades\Facade;

/**
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|RegionService region(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|SubregionService subregion(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|CountryService country(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|StateService state(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|CityService city(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|FundSourceService fundSource(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|OccupationService occupation(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|RelationService relation(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|RemittancePurposeService remittancePurpose(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|CatalogService catalog(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|LanguageService language(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|CurrencyService currency(array $filters = null)
 * @method static \Illuminate\Contracts\Pagination\Paginator|\Illuminate\Support\Collection|IdDocTypeService idDocType(array $filters = null)
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
