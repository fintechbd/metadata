<?php

namespace Fintech\MetaData\Services;

use Fintech\MetaData\Interfaces\CityRepository;

/**
 * Class CityService
 *
 */
class CityService extends \Fintech\Core\Abstracts\Service
{
    /**
     * CityService constructor.
     */
    public function __construct(private readonly CityRepository $cityRepository)
    {

    }

    /**
     * @return mixed
     */
    public function list(array $filters = [])
    {
        //Do Business Stuff

        return $this->cityRepository->list($filters);

    }

    public function create(array $inputs = [])
    {
        return $this->cityRepository->create($inputs);
    }

    public function find($id, $onlyTrashed = false)
    {
        return $this->cityRepository->find($id, $onlyTrashed);
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
