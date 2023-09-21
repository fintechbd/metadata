<?php

namespace Fintech\MetaData\Facades;

use Fintech\MetaData\Services\CountryService;
use Illuminate\Support\Facades\Facade;

/**
 * @see \Fintech\MetaData\MetaData
 *
 * @method static CountryService country()
 */
class MetaData extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fintech\MetaData\MetaData::class;
    }
}
