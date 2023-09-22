<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\CityRepository;

/**
 * Class CityService
 * @package Fintech\MetaData\Services
 *
 * @property-read CityRepository $cityRepository
 */
class CityService
{
    /**
     * CityService constructor.
     * @param CityRepository $cityRepository
     */
    public function __construct(private CityRepository $cityRepository) { }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->cityRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->cityRepository->create($inputs);
    }

    public function read($id)
    {
        return $this->cityRepository->read($id);
    }

    public function update($id, array $inputs = [])
    {
        return $this->cityRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->cityRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->cityRepository->restore($id);
    }
}
