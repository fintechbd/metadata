<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\CityRepository;

/**
 * Class CityService
 *
 * @property-read CityRepository $cityRepository
 */
class CityService
{
    public $cityRepository;

    /**
     * CityService constructor.
     */
    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    /**
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
