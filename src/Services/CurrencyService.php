<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\CountryRepository;

/**
 * Class CurrencyService
 * @package Fintech\MetaData\Services
 *
 */
class CurrencyService extends \Fintech\Core\Abstracts\Service
{
    /**
     * CurrencyService constructor.
     * @param CountryRepository $countryRepository
     */
    public function __construct(private readonly CountryRepository $countryRepository)
    {
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        if (isset($filters['enabled'])) {
            $filters['multi_currency_enabled'] = $filters['enabled'];
            unset($filters['enabled']);
        }
        return $this->countryRepository->list($filters);

    }

    public function update($id, array $inputs = [])
    {
        $country = $this->find($id);

        $inputs['country_data'] = $country->country_data;

        if (isset($inputs['name'])) {
            $inputs['currency_name'] = $inputs['name'];
            unset($inputs['name']);
        }

        if (isset($inputs['code'])) {
            $inputs['currency'] = $inputs['code'];
            unset($inputs['code']);
        }

        if (isset($inputs['symbol'])) {
            $inputs['currency_symbol'] = $inputs['symbol'];
            unset($inputs['symbol']);
        }
        if (isset($inputs['enabled'])) {
            $inputs['country_data']['multi_currency_enabled'] = $inputs['enabled'];
            unset($inputs['enabled']);
        }


        return $this->countryRepository->update($id, $inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->countryRepository->find($id, $onlyTrashed);
    }
}
