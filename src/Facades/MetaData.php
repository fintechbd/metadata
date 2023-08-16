<?php

namespace Fintech\MetaData\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Fintech\MetaData\MetaData
 */
class MetaData extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Fintech\MetaData\MetaData::class;
    }
}
