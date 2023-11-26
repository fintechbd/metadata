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
    /**
     * LanguageService constructor.
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
        $filters['language_enabled'] = $filters['enabled'] ?? true;

        return $this->countryRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->countryRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->countryRepository->find($id, $onlyTrashed);
    }

    public function update($id, array $inputs = [])
    {
        return $this->countryRepository->update($id, $inputs);
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

    public function import(array $filters)
    {
        return $this->countryRepository->create($filters);
    }
}
