<?php

namespace Fintech\MetaData\Services;


use Fintech\MetaData\Interfaces\RegionRepository;

/**
 * Class RegionService
 * @package Fintech\MetaData\Services
 * @method bool create(array $inputs)
 * @property-read RegionRepository $regionRepository
 */
class RegionService
{
    /**
     * RegionService constructor.
     * @param RegionRepository $regionRepository
     */
    public function __construct(private RegionRepository $regionRepository) { }

    /**
     * @param array $filters
     * @return mixed
     */
    public function list(array $filters = [])
    {
        $regionList = $this->regionRepository->list($filters);

        //Do Business Stuff

        return $regionList;

    }

    public function create(array $inputs = [])
    {
        return $this->regionRepository->create($inputs);
    }

    public function read($id)
    {
        return $this->regionRepository->read($id);
    }

    public function update($id, array $inputs = [])
    {
        return $this->regionRepository->update($id, $inputs);
    }

    public function destroy($id)
    {
        return $this->regionRepository->delete($id);
    }

    public function restore($id)
    {
        return $this->regionRepository->restore($id);
    }
}
