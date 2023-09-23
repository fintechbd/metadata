<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\SubRegionRepository;

/**
 * Class SubRegionService
 * @package Fintech\MetaData\Services
 *
 * @property-read SubRegionRepository $subRegionRepository
 */
class SubRegionService
{
    /**
     * SubRegionService constructor.
     * @param SubRegionRepository $subRegionRepository
     */
    public function __construct(private SubRegionRepository $subRegionRepository) { }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $countryList = $this->subRegionRepository->list($filters);

        //Do Business Stuff

        return $countryList;

    }

    public function create(array $inputs = [])
    {
        return $this->subRegionRepository->create($inputs);
    }

    public function read($id)
    {
        return $this->subRegionRepository->read($id);
    }

    public function update($id, array $inputs = [])
    {
        return $this->subRegionRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->subRegionRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->subRegionRepository->restore($id);
    }
}
