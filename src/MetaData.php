<?php

namespace Fintech\MetaData;

use Fintech\MetaData\Services\BankBranchService;
use Fintech\MetaData\Services\BankService;
use Fintech\MetaData\Services\CityService;
use Fintech\MetaData\Services\CountryService;
use Fintech\MetaData\Services\FundSourceService;
use Fintech\MetaData\Services\OccupationService;
use Fintech\MetaData\Services\RegionService;
use Fintech\MetaData\Services\RelationService;
use Fintech\MetaData\Services\RemittancePurposeService;
use Fintech\MetaData\Services\StateService;
use Fintech\MetaData\Services\SubRegionService;
use Illuminate\Contracts\Container\BindingResolutionException;

class MetaData
{
    /**
     * @return RegionService
     *
     * @throws BindingResolutionException
     */
    public function region()
    {
        return app()->make(RegionService::class);
    }

    /**
     * @return SubRegionService
     *
     * @throws BindingResolutionException
     */
    public function subregion()
    {
        return app()->make(SubRegionService::class);
    }

    /**
     * @return CountryService
     *
     * @throws BindingResolutionException
     */
    public function country()
    {
        return app()->make(CountryService::class);
    }

    /**
     * @return StateService
     *
     * @throws BindingResolutionException
     */
    public function state()
    {
        return app()->make(StateService::class);
    }

    /**
     * @return CityService
     *
     * @throws BindingResolutionException
     */
    public function city()
    {
        return app()->make(CityService::class);
    }

    /**
     * @return BankService
     *
     * @throws BindingResolutionException
     */
    public function bank()
    {
        return app()->make(BankService::class);
    }

    /**
     * @return BankBranchService
     *
     * @throws BindingResolutionException
     */
    public function bankBranch()
    {
        return app()->make(BankBranchService::class);
    }

    /**
     * @return FundSourceService
     *
     * @throws BindingResolutionException
     */
    public function fundSource()
    {
        return app()->make(FundSourceService::class);
    }

    /**
     * @return OccupationService
     *
     * @throws BindingResolutionException
     */
    public function occupation()
    {
        return app()->make(OccupationService::class);
    }

    /**
     * @return RelationService
     *
     * @throws BindingResolutionException
     */
    public function relation()
    {
        return app()->make(RelationService::class);
    }

    /**
     * @return RemittancePurposeService
     *
     * @throws BindingResolutionException
     */
    public function remittancePurpose()
    {
        return app()->make(RemittancePurposeService::class);
    }
}
