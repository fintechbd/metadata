<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\CountryRepository;

/**
 * Class LanguageService
 * @package Fintech\MetaData\Services
 *
 */
class LanguageService
{
    use \Fintech\Core\Traits\HasFindWhereSearch;

    /**
     * LanguageService constructor.
     * @param CountryRepository $countryRepository
     */
    public function __construct(private readonly CountryRepository $countryRepository)
    {
    }

    public function update($id, array $inputs = [])
    {
        $country = $this->find($id);

        $country_data = $country->country_data;

        $language = $country->language;

        $language['code'] = $inputs['code'] ?? $language['code'];
        $language['name'] = $inputs['name'] ?? $language['name'];
        $language['native'] = $inputs['native'] ?? $language['native'];
        $country_data['language_enabled'] = $inputs['enabled'] ?? $country_data['language_enabled'];

        $inputs = [
            'language' => $language,
            'country_data' => $country_data
        ];

        return $this->countryRepository->update($id, $inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->countryRepository->find($id, $onlyTrashed);
    }

    public function destroy($id)
    {
        return $this->countryRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->countryRepository->restore($id);
    }

    public function export(array $filters)
    {
        return $this->countryRepository->list($filters);
    }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $filters['language_enabled'] = $filters['enabled'] ?? true;

        return $this->countryRepository->list($filters);

    }

    public function import(array $filters)
    {
        return $this->countryRepository->create($filters);
    }

    public function create(array $inputs = [])
    {
        return $this->countryRepository->create($inputs);
    }
}
