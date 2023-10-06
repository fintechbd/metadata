<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\CountryRepository;

/**
 * Class CountryService
 *
 */
class CountryService
{
    public $countryRepository;

    /**
     * CountryService constructor.
     * @param CountryRepository $countryRepository
     */
    public function __construct(CountryRepository $countryRepository)
    {
        $this->countryRepository = $countryRepository;
    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->countryRepository->list($filters);

        //Do Business Stuff

        return $countryList;

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
}
