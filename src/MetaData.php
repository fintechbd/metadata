<?php

namespace Fintech\MetaData;

use Fintech\MetaData\Services\V1\CountryService;
use Illuminate\Contracts\Container\BindingResolutionException;

class MetaData
{
    /**
     * @return CountryService
     * @throws BindingResolutionException
     */
    public function country()
    {
        return app()->make(CountryService::class);
    }
}
